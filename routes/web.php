<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produits;
use App\Http\Controllers\produit;
use App\Http\Controllers\ajout;
use App\Http\Controllers\edition;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/produits', [produits::class, 'produits']);

Route::post('/produits/ajout', [ajout::class, 'ajouter']);

Route::get('/produits/ajout', [ajout::class, 'ajout']);

Route::get('/produits/{id_produit}', [produit::class, 'produit'])->whereNumber('id_produit');

Route::post('/produits/{id_produit}/edition',[edition::class, 'edition'])->whereNumber('id_produit');

Route::get('/produits/{id_produit}/edition', [edition::class, 'voir'])->whereNumber('id_produit');

Route::redirect('/', '/ExerciceLaravel/public/produits');
