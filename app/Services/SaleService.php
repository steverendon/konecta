<?php

namespace App\Services;

use App\Models\Product;

class SaleService
{
    public static function init()
    {
        return new static;
    }

    public function bestSeller()
    {
        return Sale::orderBy('amount', 'DESC')->first();
    }

    public function recordSale()
    {
        
    }
}