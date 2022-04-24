<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produit;

class produits extends Controller
{
    // Permettra montrer tous les produits
    public function produits () {
        //$produits = DB::select('select * from produits');
        $produits = Produit::all();
        return view('produits', ['produits' => $produits]);
    }
}