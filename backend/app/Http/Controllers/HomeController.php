<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('app.home.index');
    }

    public function auction()
    {
        return view('app.home.auction');
    }
}
