<?php

use App\Http\Controllers\client\AccountController;
use App\Http\Controllers\client\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index'])->name('index');



Route::middleware('auth')->group(function () {
    
  Route::get('/account',[AccountController::class,'index'])->name('account');
});

require __DIR__.'/auth.php';
