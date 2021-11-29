<?php

namespace App\Http\Controllers\Droppoint;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(Basket $basket) {
        return view('droppoint.order.show', compact('basket'));
    }

    public function sent(Basket $basket, Request $request) {
        $basket->update([
            'is_sent' => 1,
            'sent_at' => Carbon::now(),
            'shipment_service' => $request->shipment_service,
            'shipment_receipt' => $request->shipment_receipt
        ]);

        $basket->purchase_order()->update([
            'is_sent' => 1
        ]);

        notify()->success('Pesanan berhasil dikirim');
        return redirect()->route('droppoint.home');
    }
}
