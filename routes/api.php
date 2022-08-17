<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;

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

// Login
Route::post('login', [LoginController::class, 'login']);

// Product Resource
Route::resource('products','\App\Http\Controllers\API\ProductController');

// ทำให้ใช้งานจริงต้องเข้า middleware เพื่อทำ auth
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
