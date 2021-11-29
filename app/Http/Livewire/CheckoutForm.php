<?php

namespace App\Http\Livewire;

use App\Models\Basket;
use App\Models\Invoice;
use App\Models\Postalcode;
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
    public $shipment_bill= 40000;
    public $product_bill = 0;
    public $villages;
    public $sent_from;
    public $total_bill;

    public function mount() {
        $this->basket = Basket::where('user_id', 1)->where('is_checked_out', 0)->first();
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
    }

    public function countTotalBill() {
        $this->total_bill = $this->product_bill + $this->shipment_bill;
    }

    public function countShipmentBill($origin, $destination) {
        if($origin == 'SEMARANG' and $destination == 'JAWA TENGAH') {
            $this->shipment_bill = 20000;
        }
        $this->countTotalBill();
    }

    public function updatedShipmentProvince($value) {
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
