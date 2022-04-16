<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('home.home');
});


Route::get('/redirect', [AdminController::class, 'redirect'])->name('redirect');

// view_category
Route::get('/view_category', [CategoryController::class, 'view_category'])->name('view_category');
Route::post('/add_category', [CategoryController::class, 'add_category'])->name('add_category');

// view_products
Route::get('/view_product', [ProductController::class, 'view_product'])->name('view_product');
Route::post('/add_product', [ProductController::class, 'add_product'])->name('add_product');
Route::get('/delete_product/{id}', [ProductController::class, 'delete_product'])->name('delete_product');







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});