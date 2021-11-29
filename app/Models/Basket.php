<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'is_checked_out',
        'is_paid',
        'is_payment_confirmed',
        'is_sent',
        'is_done',
        'checked_out_at',
        'paid_at',
        'payment_confirmed_at',
        'sent_at',
        'done_at',
        'shipment_service',
        'shipment_receipt'
    ];

    public function products() {
        return $this->hasMany(BasketProduct::class, 'basket_id');
    }

    public function invoice() {
        return $this->hasOne(Invoice::class, 'basket_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function purchase_order() {
        return $this->hasOne(PurchaseOrder::class, 'basket_id');
    }
}
