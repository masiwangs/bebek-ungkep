<?php

namespace App\Http\Livewire;

use App\Models\Basket;
use App\Models\Invoice;
use App\Models\Postalcode;
use App\Models\ShipmentPricing;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;

class CheckoutForm extends Component
{
    // TODO: tambah increase decrease qty
    public $basket;
    public $shipment_postalcode,
           $shipment_province,
           $shipment_city,
           $shipment_subdistrict,
           $shipment_village,
           $shipment_road,
           $discount;
    public $shipment_bill;
    public $product_bill = 0;
    public $villages;
    public $sent_from;
    public $total_bill;
    public $bill_error = false;

    public function mount() {
        if(auth()->check()){
            $this->basket = Basket::where('user_id', auth()->id())->where('is_checked_out', 0)->first();
        }
        foreach ($this->basket->products as $basket_product) {
            $this->product_bill += $basket_product->product_price * $basket_product->product_qty;
        }
    }

    public function updatedShipmentPostalcode($value) {
        $addresses = Postalcode::where('kodepos', $value)->get();
        if(count($addresses) > 0) {
            $this->shipment_province = $addresses[0]->provinsi;
            $this->shipment_city = $addresses[0]->kabupaten;
            $this->shipment_subdistrict = $addresses[0]->kecamatan;
            $this->villages = $addresses;
        }
        $this->sent_from = null;
        $this->bill_error = 'Pengiriman tidak tersedia di wilayah ini';
    }

    public function countTotalBill() {
        $this->total_bill = $this->product_bill + $this->shipment_bill;
    }

    public function countShipmentBill($origin, $destination) {
        $shipment_price = ShipmentPricing::where('origin', $this->sent_from)
            ->where('destination', 'like', '%'.$this->shipment_city.'%')
            ->first();
        if(!$shipment_price) {
            return $this->bill_error = 'Pengiriman tidak tersedia di wilayah ini';
        } else {
            $this->bill_error = false;
        }
        $this->shipment_bill = 0;
        $product_count = 0;
        foreach ($this->basket->products as $basket_product) {
            $product_count += $basket_product->product_qty;
            $this->shipment_bill += $shipment_price->initial_price * ceil($basket_product->product_qty * 0.6);
        }
        if($product_count >= 5) {
            $this->shipment_bill = 0;
        }
        $this->countTotalBill();
    }

    public function updatedShipmentCity($value) {
        $this->countShipmentBill($this->sent_from, $value);
    }

    public function updatedSentFrom($value) {
        $this->countShipmentBill($value, $this->shipment_province);
    }

    public function submit() {
        Invoice::create([
            'code' => 'INV'.Str::upper(Str::random(3)).Carbon::now()->timestamp,
            'user_id' => 1,
            'basket_id' => $this->basket->id,
            'shipment_postalcode' => $this->shipment_postalcode,
            'shipment_province' => $this->shipment_province,
            'shipment_city' => $this->shipment_city,
            'shipment_subdistrict' => $this->shipment_subdistrict,
            'shipment_village' => $this->shipment_village,
            'shipment_road' => $this->shipment_road,
            'product_bill' => $this->product_bill,
            'shipment_bill' => $this->shipment_bill,
            'discount' => $this->discount,
        ]);
        $this->basket->update([
            'is_checked_out' => 1,
            'checked_out_at' => Carbon::now()
        ]);

        return redirect()->route('client.payment');
    }

    public function render()
    {
        return view('livewire.checkout-form');
    }
}
