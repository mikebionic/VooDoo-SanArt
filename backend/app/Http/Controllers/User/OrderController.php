<?php

namespace App\Http\Controllers\User;


class OrderController
{
    public function list()
    {
        return view('user.order.list', [
            'orders' => []
        ]);
    }

    public function show($order)
    {
        return view('user.order.show', [

        ]);
    }
}
