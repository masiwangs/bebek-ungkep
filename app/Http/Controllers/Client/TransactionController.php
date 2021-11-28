<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        $baskets = Basket::where([
            'user_id' => 1,
            'is_checked_out' => 1
        ])->get();
        
        return view('client.transaction', compact('baskets'));
    }
}
