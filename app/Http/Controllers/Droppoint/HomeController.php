<?php

namespace App\Http\Controllers\Droppoint;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $purchase_orders = PurchaseOrder::where('drop_point_id', auth()->id())
            ->where('is_sent', false)
            ->orderByDesc('id')
            ->get();
        return view('droppoint.index', compact('purchase_orders'));
    }
}
