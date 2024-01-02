<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

use App\Http\Controllers\productController;

Route::get('/products', [productController::class, 'index']);
Route::get('/products/{id}', [productController::class, 'show']);
Route::post('/products/input', [productController::class, 'store']);
Route::put('/products/input/{id}', [productController::class, 'update']);
Route::delete('/products/delete/{id}', [productController::class, 'destroy']);

