<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsSize extends Model
{
    use HasFactory;

    protected $fillable = [
        'size_name'
    ];

    protected $table = 'products_size';
}
