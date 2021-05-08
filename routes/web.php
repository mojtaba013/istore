<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});


//Route::resource('products', ProductController::class);
//Route::get('/{id?}',[ProductController::class,'index']);
//Route::post('/insert',[ProductController::class,'insert']);
Route::post('',[ProductController::class,'insert']);
Route::post('',[ProductController::class,'insert']);


