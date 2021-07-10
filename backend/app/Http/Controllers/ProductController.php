<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function list()
    {
        return view('app.product.list', [
            'products' => [],
        ]);
    }

    public function show(Product $product)
    {
        return view('app.product.show', [
            'products' => [],
        ]);
    }
}
