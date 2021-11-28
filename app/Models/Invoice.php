<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'basket_id',
        'shipment_postalcode',
        'shipment_province',
        'shipment_city',
        'shipment_subdistrict',
        'shipment_village',
        'shipment_road',
        'product_bill',
        'shipment_bill',
        'discount'
    ];

    public function basket() {
        return $this->belongsTo(Basket::class, 'basket_id');
    }

    public function payment() {
        return $this->hasOne(Payment::class, 'invoice_id');
    }
}
