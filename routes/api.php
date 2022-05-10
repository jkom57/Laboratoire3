<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/produits',  [ApiController::class, 'index'])->middleware('auth.basic');

Route::post('/produits/ajout',  [ApiController::class, 'store'])->middleware('auth.basic');

Route::get('/produits/{id_produit}',  [ApiController::class, 'show'])->middleware('auth.basic');

Route::put('/produits/{id_produit}',  [ApiController::class, 'update'])->middleware('auth.basic');

Route::put('/produits/{id_produit}/{quantity}',  [ApiController::class, 'quantity'])->middleware('auth.basic');

Route::delete('/produits/{$id_produit}',  [ApiController::class, 'destroy'])->middleware('auth.basic')->name('delete');

//Route::apiResource('/produits', ApiController::class)->middleware('auth.basic');