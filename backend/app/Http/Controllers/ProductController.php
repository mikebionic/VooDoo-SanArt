<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        $query = Product::query();
        if ($order = $request->get('order')) {
            if ($order == 'cheaper') {
                $query->orderBy('price', 'asc');
            }
            else if ($order == 'expensive') {
                $query->orderBy('price', 'desc');
            }
            else if ($order == 'new') {
                $query->latest();
            }
            else if ($order == 'viewed') {
                $query->orderBy('viewed', 'desc');
            }
        }
        if (($startPrice = $request->get('start_price')) > 0) {
            $query->where('price', '>', $startPrice);
        }
        if (($endPrice = $request->get('end_price')) > 0) {
            $query->where('price', '<', $endPrice);
        }
        if ($category = $request->get('category')) {
            $query->where('category_id', $category);
        }

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
