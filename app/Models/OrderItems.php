<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'variant_stok_id',
        'qty',
        'price'
    ];

    protected $table = 'order_items';
}
