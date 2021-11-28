<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'code',
        'bill',
        'pay_with',
        'payment_proof',
        'is_confirmed'
    ];
}
