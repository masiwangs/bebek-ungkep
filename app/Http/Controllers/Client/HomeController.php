<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $products = Product::get();
        $baskets = Basket::where('user_id', auth()->id())
            ->where('is_checked_out', 1)
            ->orderByDesc('id')->get();
        return view('client.index', compact('products', 'baskets'));
    }
}
