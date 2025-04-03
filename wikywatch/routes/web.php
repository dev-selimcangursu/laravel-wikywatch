<?php

use App\Http\Controllers\client\AccountController;
use App\Http\Controllers\client\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index'])->name('index');



Route::middleware('auth')->group(function () {
    
  Route::get('/account',[AccountController::class,'index'])->name('account');
  Route::post('/account/update',[AccountController::class,'accountUpdate'])->name('account.update');
  Route::post('/account/change/password',[AccountController::class,'changePassword'])->name('account.change.password');
});

require __DIR__.'/auth.php';
