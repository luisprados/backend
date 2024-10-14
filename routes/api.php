<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TreatmentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas de clientes
Route::resource('customers', CustomerController::class);
//Rutas de productos
Route::resource('products', ProductController::class);
//Rutas de tratamientos
Route::resource('treatments', TreatmentController::class);
//Rutas de sesiones
//Route::resource('sessions', SessionController::class);
