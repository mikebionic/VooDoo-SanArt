<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['as' => 'app.', 'namespace' => 'App\\Http\\Controllers'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix' => '/category', 'as' => 'category.'], function () {
        Route::get('/{category}', 'CategoryController@show')->name('show');
    });
    Route::group(['prefix' => '/product', 'as' => 'product.'], function () {
        Route::get('/{product}', 'ProductController@show')->name('show');
        Route::get('/', 'ProductController@list')->name('list');
    });
    Route::get('locale/{locale}', 'LocaleController@change')->name('language.change');
});
Route::group(['as' => 'auth.', 'namespace' => 'App\\Http\\Controllers\\Auth'], function () {
    Route::get('login', 'LoginController@login')->name('login');
    Route::post('login', 'LoginController@loginCheck')->name('login_check');
    Route::post('logout', 'LoginController@logout')->name('logout');

    Route::get('register', 'RegisterController@register')->name('register');
    Route::post('register', 'RegisterController@registerCheck')->name('register_check');
});
Route::group(['as' => 'user.', 'namespace' => 'App\\Http\\Controllers\\User', 'prefix' => 'user'], function () {
    Route::get('/', 'UserController@index')->name('index');
    Route::get('/edit', 'UserController@edit')->name('edit');

    Route::get('products', 'ProductController@list')->name('product_list');
    Route::get('product/new', 'ProductController@create')->name('product_create');
    Route::get('product/{product}/edit', 'ProductController@edit')->name('product_edit');

    Route::get('orders', 'OrderController@list')->name('order_list');
    Route::get('order/{order}/show', 'OrderController@show')->name('order_show');

    Route::get('client_orders', 'ClientOrderController@list')->name('client_order_list');
    Route::get('client_order/{order}/show', 'ClientOrderController@edit')->name('client_order_edit');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
