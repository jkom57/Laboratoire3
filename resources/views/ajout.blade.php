@extends('layouts.base');

@section('links')
    <link rel="stylesheet" href="../../public/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../public/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/assets/libs/css/style.css">
    <link rel="stylesheet" href="../../public/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
@endsection()

@section('title', 'Ajout - Inventaire');

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <form method="POST">
                    @csrf
                    <div class="row">
                        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                                    <div class="product-slider">
                                        <img class="d-block" src="../../public/assets/images/eco-slider-img-1.png" alt="First slide">
                                        <input type="text" value="" name="image" placeholder="Coller le lien de l'image"></input>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                    <div class="product-details">
                                        <div class="border-bottom pb-3 mb-3">
                                            <h2 class="mb-3"><input type="text" name="name" placeholder="Produit #1"></input></h2>
                                            <h3 class="mb-0 text-primary">$<input type="text" name="price" placeholder="49.00"></h3>
                                        </div>
                                        <div class="product-size border-bottom">
                                            <h4>Fournisseur</h4>
                                            <input type="text" name="provider" placeholder="ACME Inc.">
                                            <div class="product-qty">
                                                <h4>Quantité</h4>
                                                <div class="quantity">
                                                    <input type="number" name="quantity" value="1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-description">
                                            <h4 class="mb-1">Description</h4>
                                            <textarea rows="4" cols="50" name="description" placeholder="Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;"></textarea>
                                            <input type="submit" class="btn btn-primary btn-block btn-lg" value="Sauvegarder">
                                        </div>
                                    </div>
                                </div>
                                
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
@endsection()