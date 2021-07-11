<?php


namespace App\Http\Controllers;


use App\Models\User;

class AuthorController
{
    public function list()
    {
        $query = User::query()->withCount('products')->orderBy('products_count', 'desc');
        return view('app.author.list', [
            'authors' => $query->get(),
        ]);
    }

    public function show(User $author)
    {
        return view('app.author.show', [
            'author' => $author,
        ]);
    }
}
