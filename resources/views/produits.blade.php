@extends('layouts.base');

@section('links')
    <link rel="stylesheet" href="../public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../public/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/assets/libs/css/style.css">
    <link rel="stylesheet" href="../public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
@endsection()

@section('title', 'Inventaire');

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="row">
                            @foreach ($produits as $produit)
                            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="product-thumbnail">
                                    <div class="product-img-head">
                                        <div class="product-img">
                                            <img src="{!! url("{$produit->image}") !!}" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-content-head">
                                            <h3 class="product-title">{{ $produit->name }}</h3>
                                            <div class="product-price">{{ $produit->price }}</div>
                                        </div>
                                        <div class="product-btn">
                                            <a href="{{ url('produits/' . $produit->id . '/edition') }}" class="btn btn-primary">Modifier</a>
                                            <a href="{{ url('produits/' . $produit->id ) }}" class="btn btn-outline-light">Détails</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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