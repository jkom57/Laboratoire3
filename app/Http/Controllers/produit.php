<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Produit as Product;

class produit extends Controller
{
    // Motrera un produit qui l'utilisateur veux voir
    public function produit ($id_produit) {
        //$produit = DB::select('select * from produits where id = '. $id_produit);
        $produit = Product::find($id_produit);
        return view('produit', ['produit' => $produit]);
    }
}
