<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\PurchaseOrder;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {

    }

    public function all() {
        $baskets = Basket::where([
            'is_paid' => 1
        ])->get();
        return view('admin.order.list', compact('baskets'));
    }

    public function show(Basket $basket) {
        $drop_points = User::where('role_id', 4)->orderBy('name')->get();
        return view('admin.order.show', compact('basket', 'drop_points'));
    }

    public function sendPO(Basket $basket, Request $request) {
        $drop_point = User::find($request->drop_point_id);

        PurchaseOrder::create([
            'basket_id' => $basket->id,
            'drop_point_id' => $request->drop_point_id,
            'position' => $drop_point->drop_point_address->city,
            'is_sent' => 0,
            'is_done' => 0
        ]);

        notify()->success('PO berhasil dikirim');
        return back();
    }
}
