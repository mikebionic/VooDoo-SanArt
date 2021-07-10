<?php

namespace App\Http\Controllers\User;


class ProductController
{
    public function list()
    {
        $user = auth()->user();
        if (!$user) abort(403);
        $products = $user->products();
        return view('user.product.list', [
            'products' => $products->paginate(12),
        ]);
    }
}
