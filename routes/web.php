<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/create/product',[ProductController::class,'create'])->name('product.create');

Route::get('/store/product',[ProductController::class,'store1'])->name('product.store');
