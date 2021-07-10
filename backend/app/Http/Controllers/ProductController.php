<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function list()
    {
        $query = Product::query();

        return view('app.product.list', [
            'products' => $query->paginate(12),
        ]);
    }

    public function show(Product $product)
    {
        $product->viewed++;
        $product->save();
        return view('app.product.show', [
            'product' => $product,
        ]);
    }
}
