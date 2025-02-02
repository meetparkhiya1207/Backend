<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'product_type',
        'product_image',
        'product_price',
        'product_size',
        'product_color',
    ];
}
