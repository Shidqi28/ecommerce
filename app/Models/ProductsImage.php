<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'variant_id',
        'image_url',
        'is_primary'
    ];

    protected $table = 'products_image';
}
