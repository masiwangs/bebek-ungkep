<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'drop_point_id',
        'basket_id',
        'position',
        'is_sent',
        'is_done'
    ];

    public function basket() {
        return $this->belongsTo(Basket::class, 'basket_id');
    }

    public function drop_point() {
        return $this->belongsTo(User::class, 'drop_point_id');
    }
    
}
