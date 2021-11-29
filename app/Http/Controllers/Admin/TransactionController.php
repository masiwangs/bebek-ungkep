<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function all() {
        $payments = Payment::orderByDesc('id')->get();
        return view('admin.transaction.list', compact('payments'));
    }

    public function show(Payment $payment) {
        return view('admin.transaction.show', compact('payment'));
    }

    public function confirm(Payment $payment) {
        $payment->update([
            'is_confirmed' => 1
        ]);

        $basket = Basket::find($payment->invoice->basket_id);

        $basket->update([
            'is_payment_confirmed' => 1,
            'payment_confirmed_at' => Carbon::now()
        ]);

        notify()->success('Pembayaran berhasil dikonfirmasi');
        return redirect()->route('admin.order.show', ['basket' => $basket->id]);
    }
}
