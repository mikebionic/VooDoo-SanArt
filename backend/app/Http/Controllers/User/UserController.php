<?php

namespace App\Http\Controllers\User;

class UserController
{
    public function index()
    {
        return view('user.index');
    }

    public function edit()
    {
        $user = auth()->user();
        if (!$user) return abort(403);
        return view('user.user.edit', [
            'user' => $user,
        ]);
    }
}
