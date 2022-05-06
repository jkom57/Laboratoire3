<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class api extends Controller
{
    //
    public function ajout () {
        return "Route pour ajouter";
    }

    //
    public function produits () {
        return "Route pour montrer tous les produits";
    }

    //
    public function produit ($id_produit) {
        return "Route pour montrer un produit";
    }

    //
    public function edition ($id_produit) {
        return "Route pour modifier un produit";
    }

    //
    public function quantite ($id_produit, $quantite) {
        return "Route pour modifier la quantité d'un produit";
    }
    
    //
    public function supprimer ($id_produit) {
        return "Route pour supprimer un produit";
    }
}
