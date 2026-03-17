<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Si tu tabla se llama 'products', Laravel lo detecta automáticamente
    protected $fillable = [
        'codigo',
        'name',
        'category',
        'price',
        'stock'
    ];
}