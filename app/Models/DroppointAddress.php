<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DroppointAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'drop_point_id',
        'road',
        'village',
        'subdistrict',
        'city',
        'province',
        'postalcode'
    ];
}
