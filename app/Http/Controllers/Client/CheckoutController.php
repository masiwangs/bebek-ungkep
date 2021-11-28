<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index() {
        $basket = Basket::where('user_id', 1)->where('is_checked_out', 0)->first();
        return view('client.checkout', compact('basket'));
    }
}
