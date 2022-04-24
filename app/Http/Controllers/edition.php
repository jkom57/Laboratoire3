<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produit as Product;

class edition extends Controller
{
    // Modifiera un produit qui l'utilisateur veux
    public function voir (Request $request, $id_produit) {
        $produit = Product::find($id_produit);
        return view('edition', ['produit' => $produit]);
    }

    public function edition (Request $request, $id_produit) {
        $produit = Product::find($id_produit);
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
