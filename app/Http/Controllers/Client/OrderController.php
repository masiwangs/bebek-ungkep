<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $baskets = Basket::where('user_id', 1)->where('is_checked_out', 1)->orderByDesc('id')->get();
        return view('client.order', compact('baskets'));
    }
}
