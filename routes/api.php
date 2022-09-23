<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');


Route::get('items',[App\Http\Controllers\API\ItemController::class, 'index']);

Route::get('/items/show/{item}',[App\Http\Controllers\API\ItemController::class, 'show']);

Route::get('/carts/show/{cart}',[App\Http\Controllers\CartController::class, 'show']);

Route::post('/user/cart/{item}',[App\Http\Controllers\CartController::class, 'add_in_my_cart']);

Route::post('/user/cart/destroy_item/{item}',[App\Http\Controllers\CartController::class, 'destroy_in_my_cart'])->middleware('auth');
