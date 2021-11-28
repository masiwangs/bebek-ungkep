<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function all() {
        $payments = Payment::orderByDesc('id')->get();
        return view('admin.transaction.list', compact('payments'));
    }
}
