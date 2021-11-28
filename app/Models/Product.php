<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'image',
        'code',
        'name',
        'description',
        'regular_price',
        'regular_min_order',
        'reseller_price',
        'reseller_min_order',
        'agent_price',
        'agent_min_order',
        'industrial_price',
        'industrial_min_order'
    ];
}
