<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BasketController as ControllersBasketController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Database\Factories\BasketFactory;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/baskets',[ControllersBasketController::class,'index']);
Route::get('/products',[ProductController::class,'show']);
Route::put('/products',[ProductController::class,'store']);
Route::get('/products/{product}',[ProductController::class,'index']);
Route::put('/products/{produt}',[ProductController::class,'update']);
Route::delete('/products/{product}',[ProductController::class,'destroy']);

