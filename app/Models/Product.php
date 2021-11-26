<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description',
        'regular_price',
        'regular_min_order',
        'regular_no_delivery_min_order',
        'agen_price',
        'agen_min_order',
        'agen_no_delievery_min_order',
        'industrial_price',
        'industrial_min_order',
        'industrial_no_delivery_min_order'
    ];
}
