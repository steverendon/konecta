<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $bestSeller = Sale::bestSeller()->product->name;

        return view('sale.index', compact('products', 'bestSeller'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);

        if ($product->stock < $request->amount || $request->amount == 0) {
            return back()->with('success', 'Error: Cantidad solicitad no disponible!');
        }

        Sale::create($request->all());

        $product->stock = $product->stock - $request->amount;
        $product->save();

        return back()->with('success', 'Venta realizada exitosamente!'); 
    }
}
