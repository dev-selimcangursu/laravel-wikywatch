<?php

use App\Http\Controllers\client\AccountController;
use App\Http\Controllers\client\BasketController;
use App\Http\Controllers\client\IndexController;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/products/{product_slug}',[ProductController::class,'index'])->name('product.index');
Route::get('/products/{product_slug}/detail',[ProductController::class,'detail'])->name('product.detail');
Route::get('/basket',[BasketController::class,'index'])->name('basket');

Route::middleware('auth')->group(function () {
    
  Route::get('/account',[AccountController::class,'index'])->name('account');
  Route::post('/account/update',[AccountController::class,'accountUpdate'])->name('account.update');
  Route::post('/account/change/password',[AccountController::class,'changePassword'])->name('account.change.password');
});

require __DIR__.'/auth.php';
