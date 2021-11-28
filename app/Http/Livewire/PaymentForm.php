<?php

namespace App\Http\Livewire;

use App\Models\Basket;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class PaymentForm extends Component
{
    use WithFileUploads;

    public $total_bill = 0;
    public $basket;
    public $invoice;
    public $pay_with, $payment_proof;

    public function mount() {
        $this->basket = Basket::where('user_id', 1)
            ->where('is_checked_out', 1)
            ->where('is_paid', 0)
            ->first();
        
        $this->invoice = $this->basket->invoice;

        $this->total_bill = $this->invoice->product_bill + $this->invoice->shipment_bill;
    }

    public function submit() {
        $this->validate([
            'payment_proof' => 'max:2048'
        ]);

        $code = Str::upper(Str::random(6));
        $image_name = $code.'-'.Carbon::now()->timestamp.'.png';

        $this->payment_proof->storeAs('proof', $image_name);

        Payment::create([
            'invoice_id' => $this->invoice->id,
            'code' => $code,
            'bill' => $this->total_bill,
            'pay_with' => $this->pay_with,
            'payment_proof' => 'proof/'.$image_name,
            'is_confirmed' => 0
        ]);

        $this->basket->update([
            'is_paid' => 1,
            'paid_at' => Carbon::now()
        ]);

        return redirect()->route('client.order');
    }

    public function render()
    {
        return view('livewire.payment-form');
    }
}
