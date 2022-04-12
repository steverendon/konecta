<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public static function up()
    {
        return new static;
    }

    public function bestSeller()
    {
        return Product::orderBy('amount', 'DESC')->first();
    }
}