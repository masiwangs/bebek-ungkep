<?php

namespace App\Http\Livewire;

use App\Models\Basket;
use App\Models\BasketProduct;
use App\Models\Product;
use Faker\Provider\Base;
use Livewire\Component;

class ClientBasket extends Component
{
    protected $listeners = ['add-to-basket' => 'addToBasket'];
    public $active_basket;

    public function mount() {
        // TODO: select basket by user_id
        $this->active_basket = Basket::where('user_id', 1)->where('is_checked_out', 0)->first();
        if(!$this->active_basket) {
            $this->active_basket = Basket::create([
                'user_id' => 1
            ]);
        }
    }

    public function addToBasket(Product $product) {
        // TODO: price & min order sesuai role
        $basket_product = BasketProduct::where('basket_id', $this->active_basket->id)->where('product_code', $product->code)->first();
        if($basket_product) {
            $basket_product->update([
                'product_qty' => $basket_product->product_qty + 1
            ]);
        } else {
            BasketProduct::create([
                'basket_id' => $this->active_basket->id,
                'product_code' => $product->code,
                'product_image' => $product->image,
                'product_name' => $product->name,
                'product_description' => $product->description,
                'product_price' => $product->regular_price,
                'product_qty' => 1
            ]);
        }

        return $this->mount();
    }

    public function increaseQty($id) {
        $basket_product = BasketProduct::find($id);
        $basket_product->update([
            'product_qty' => $basket_product->product_qty +1
        ]);
        return $this->mount();
    }

    public function decreaseQty($id) {
        $basket_product = BasketProduct::find($id);
        if($basket_product->product_qty > 1) {
            $basket_product->update([
                'product_qty' => $basket_product->product_qty -1
            ]);
        }
        return $this->mount();
    }

    public function remove($id) {
        $basket_product = BasketProduct::find($id);
        $basket_product->delete();
        return $this->mount();
    }

    public function checkout() {
        return redirect()->route('client.checkout');
    }

    public function render() {
        return view('livewire.client-basket');
    }
}
