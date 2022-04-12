<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'amount',
    ];

    public static function bestSeller()
    {
        return Sale::orderBy('amount', 'DESC')->first();
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
