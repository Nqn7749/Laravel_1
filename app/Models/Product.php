<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Các cột cho phép insert / update
    protected $fillable = [
        'name',
        'price',
        'stock',
    ];
}
