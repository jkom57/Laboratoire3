@extends('layouts.base');

@section('links')
    <link rel="stylesheet" href="../../public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../public/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/assets/libs/css/style.css">
    <link rel="stylesheet" href="../../public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
@endsection()

@section('title',  $produit->name .' - Inventaire');

@section('content')
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                <div class="product-slider">
                                    <img class="d-block img-fluid" src="{!! url("{$produit->image}") !!}" alt="{{ $produit->name }}">
                                    
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                <div class="product-details">
                                    <div class="border-bottom pb-3 mb-3">
                                        <h2 class="mb-3">{{ $produit->name }}</h2>
                                        <h3 class="mb-0 text-primary">{{ $produit->price }}</h3>
                                    </div>
                                    <div class="product-size border-bottom">
                                        <h4>Fournisseur</h4>
                                        {{ $produit->provider }}
                                        <div class="product-qty">
                                            <h4>Quantité</h4>
                                            <div class="quantity">
                                                {{ $produit->quantity }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="mb-1">Description</h4>
                                        <p>{{ $produit->description }}</p>
                                        <a href="{{ url('produits/' . $produit->id . '/edition') }}" class="btn btn-primary btn-block btn-lg">Modifier</a>
                                    </div>
                                </div>
                            </div>
                            
                </div>
            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
@endsection()