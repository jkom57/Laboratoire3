@extends('layouts.base');

@section('links')
    <link rel="stylesheet" href="../../../public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../../public/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/assets/libs/css/style.css">
    <link rel="stylesheet" href="../../../public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
@endsection()

@section('title', $produit->id_produit . ' Edition - Inventaire');

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                
                <div class="row">
                    <form method="POST">
                    @csrf
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                    <div class="product-slider">
                                        <img class="d-block img-fluid" src="{!! url("{$produit->image}") !!}" alt="{{ $produit->name }}">
                                        <label for="image">Coller le lien de l'image</label>
                                        <input id="image" type="text" name="image" value="{{$produit->image}}"></input>
                                        <!--<a href="#" class="btn btn-primary btn-block btn-lg">Choisir une image</a>-->
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                    <div class="product-details">
                                        <div class="border-bottom pb-3 mb-3">
                                            <h2 class="mb-3"><input type="text" name="name" value="{{$produit->name}}"></input></h2>
                                            <h3 class="mb-0 text-primary">$<input type="text" name="price" value="{{$produit->price}}"></h3>
                                        </div>
                                        <div class="product-size border-bottom">
                                            <h4>Fournisseur</h4>
                                            <input type="text" name="provider" value="{{$produit->provider}}">
                                            <div class="product-qty">
                                                <h4>Quantité</h4>
                                                <div class="quantity">
                                                    <input type="number" name="quantity" value="{{$produit->quantity}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-description">
                                            <h4 class="mb-1">Description</h4>
                                            <textarea rows="4" name="description" cols="50">{{$produit->description}}</textarea>
                                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Sauvegarder">
                                        </div>
                                    </div>
                                </div>
                    </form>
                            
                </div>
            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
@endsection()