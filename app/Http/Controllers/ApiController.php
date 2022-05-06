<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produits = Produit::all();
        return json_encode($produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $produit = new Produit;
        $data = $request->json()->all();
        $produit->name = $data['name'];
        $produit->price = $data['price'];
        $produit->provider = $data['provider'];
        $produit->quantity = $data['quantity'];
        $produit->description = $data['description'];
        $produit->image = $data['image'];
        $produit->save();
        return $produit;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id_produit)
    {
        //
        $produit = Produit::find($id_produit);
        return json_encode($produit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id_produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_produit)
    {
        //
        $produit = Produit::find($id_produit);
        $data = $request->json()->all();
        $produit->update($data);
        $produit->save();
        return $produit;
    }

    /**
     * Update the quantity of a specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function quantity(Request $request, $id_produit, $quantity)
    {
        //
        $produit = Produit::find($id_produit);
        $produit->quantity = $quantity;
        $produit->save();
        return  $produit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_produit)
    {
        //
        $produit = Produit::find($id_produit);
        $produit->delete();
        return Produit::all();
    }
}
