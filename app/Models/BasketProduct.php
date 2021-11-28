<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'basket_id',
        'product_code',
        'product_name',
        'product_image',
        'product_description',
        'product_price',
        'product_qty'
    ];
}
