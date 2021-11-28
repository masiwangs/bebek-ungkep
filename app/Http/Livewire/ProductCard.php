<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCard extends Component
{
    public $product;
    public $role;

    public function mount(Product $product, $role) {
        $this->product = $product;
    }

    public function addToBasket($id) {
        $product = Product::find($id);
        return $this->emit('add-to-basket', $product);
    }

    public function render()
    {
        return view('livewire.product-card');
    }
}
