<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'reference', 'price', 'weight', 'category', 'stock'
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public static function bestStock()
    {
        return Product::orderBy('stock', 'DESC')->first();
    }
}
