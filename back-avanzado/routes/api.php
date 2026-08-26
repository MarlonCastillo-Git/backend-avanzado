<?php

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::apiResource('products', ProductController::class);

Route::apiResource('orders', OrderController::class);