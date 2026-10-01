<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aqui são registradas as rotas da API para a aplicação.
|
*/

// Registrar rota de login pública
Route::post('auth/login', [AuthController::class, 'login']);

// Grupo de rotas protegidas pelo Sanctum (CRUDs)
Route::group([
    'middleware' => [
        'auth:sanctum',
    ]
], function() {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('reviews', ReviewController::class);
    Route::apiResource('orders', OrderController::class);
});