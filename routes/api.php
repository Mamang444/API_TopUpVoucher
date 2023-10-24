<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\game_controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProdukGameController;
use App\Http\Controllers\UserController;
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
    
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('game', [game_controller::class, 'index'])->name('user.index');
Route::resource('artikel', ArtikelController::class);
Route::resource('produk_game', ProdukGameController::class);
Route::get('user', [UserController::class, 'index']);
Route::get('user/{id}', [UserController::class, 'show']);
Route::post('bayar', [PaymentController::class, 'pembayaran']);