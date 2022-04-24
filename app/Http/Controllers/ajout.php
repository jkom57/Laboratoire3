<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produit as Product;

class ajout extends Controller
{
    // Permettra ajouter un produit sur la bd
    public function ajout () {
        return view('ajout', []);
    }

    public function ajouter (Request $request) {
        $produit = new Product;
        $produit->name = $request->input('name');
        $produit->price = $request->input('price');
        $produit->provider = $request->input('provider');
        $produit->quantity = $request->input('quantity');
        $produit->description = $request->input('description');
        $produit->image = $request->input('image');
        $produit->save();
        return redirect("/produits");
    }
}
