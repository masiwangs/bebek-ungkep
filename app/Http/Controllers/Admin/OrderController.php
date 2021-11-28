<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {

    }

    public function all() {
        $baskets = Basket::where([
            'is_checked_out' => 1
        ])->get();
        return view('admin.order.list', compact('baskets'));
    }
}
