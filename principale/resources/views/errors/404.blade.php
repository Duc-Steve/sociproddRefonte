@extends('layouts.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Introuvable | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Erreur 404" />


                

@endsection



<!-- Libraries Stylesheet -->
@section('style_css')
    
    @include('includes.css-animation')

    <!-- Template Stylesheet -->
    <link href="/principale/public/assets/css/mod1/style.css" rel="stylesheet">

@endsection


@section('content')

    @include('includes.principale.topbar')

    <!-- Navbar & Hero Start -->
    <div class="position-relative p-0">
        
        @include('includes.principale.headerbar')
    
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Erreur 404</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Acceuil</a></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->
    
    
    <!-- Introuvable start -->
    <div class="container-fluid py-5 mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-8">

            <h1 class="text-sociprodd-bleuefoncee mt-4 mb-3">La page est Introuvable</h1>


        </div>
    </div>
    <!-- Introuvable -->


@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

   
@endsection