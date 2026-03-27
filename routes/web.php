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

use App\Http\Controllers\CustomOrderController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cakes', function () {
    return view('products.index');
})->name('products.index');

Route::get('/cakes/{id}', function ($id) {
    return view('products.show', ['id' => $id]);
})->name('products.show');

Route::get('/custom-order', [CustomOrderController::class, 'index'])->name('custom-order');
Route::post('/custom-order', [CustomOrderController::class, 'store'])->name('custom-order.store');

Route::get('/about', function () {
    return view('about');
})->name('about');
