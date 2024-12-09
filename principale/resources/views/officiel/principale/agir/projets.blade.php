@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Projets | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Contribuez de manière significative au financement de nos projets pour un impact positif." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Projets | SOCIPRODD" />
    <meta property="og:description" content="Contribuez de manière significative au financement de nos projets pour un impact positif." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/agir-avec-nous/projets" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Projets | SOCIPRODD" />
    <meta name="twitter:url" content="https://www.sociprodd.org/agir-avec-nous/projets" />
    <meta name="twitter:description" content="Contribuez de manière significative au financement de nos projets pour un impact positif." />
    <meta name="twitter:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta name="twitter:image:height" content="333" />
    <meta name="twitter:image:width" content="500" />

    <!-- Optimisation pour les applications web mobiles -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="SOCIPRODD" />
    <meta name="apple-mobile-web-app-title" content="SOCIPRODD" />
    <meta name="theme-color" content="#050A2E" />
    <meta name="msapplication-navbutton-color" content="#050A2E" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="msapplication-starturl" content="/" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />

    <!-- Liens vers les icônes et le manifest pour les PWA -->
    <link rel="apple-touch-icon" sizes="180x180" href="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <link rel="manifest" href="/manifest.json" />
    <link rel="mask-icon" href="/principale/public/assets/images/Logo-SOCIPRODD.png" color="#050A2E" />
    <link rel="shortcut icon" href="/principale/public/assets/images/Logo-SOCIPRODD.png" />

    <!-- Balises supplémentaires pour le SEO -->
    <!-- Lien canonique pour éviter le contenu dupliqué -->
    <link rel="canonical" href="https://sociprodd.org/agir-avec-nous/projets" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/agir-avec-nous/projets" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/agir-avec-nous/projets" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/agir-avec-nous/projets" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/agir-avec-nous/projets",
                    "name": "Projets | SOCIPRODD",
                    "url": "https://www.sociprodd.org/agir-avec-nous/projets",
                    "breadcrumb": {
                        "@type": "BreadcrumbList",
                        "itemListElement": [
                            {
                                "@type": "ListItem",
                                "position": 1,
                                "name": "Accueil",
                                "item": "https://sociprodd.org"
                            },
                            {
                                "@type": "ListItem",
                                "position": 2,
                                "name": "Projets",
                                "item": "https://www.sociprodd.org/agir-avec-nous/projets"
                            }
                        ]
                    },
                    "publisher": {
                        "@type": "Organization",
                        "name": "SOCIPRODD",
                        "url": "https://sociprodd.org",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "https://www.sociprodd.org/principale/public/assets/images/Logo-SOCIPRODD.png"
                        }
                    }
                }
            ]
        })}
    </script>

                

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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Projets</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('agir-avec-nous.acceuil') }}">Agir avec nous</a></li>
                    <li class="breadcrumb-item text-sociprodd-blanc">Projets</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    
    </div>
    <!-- Navbar & Hero End -->

    
    <!--Projets SOCIPRODD -->
    <div class="container-fluid py-5 mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-8">
            <h1 class="text-sociprodd-bleuefoncee mt-5 mb-3">Soutenez nos projets</h1>
            <p class="text-sociprodd-bleuefoncee p-clasique mb-5">
                Découvrez nos projets humanitaires et sociales sur SOCIPRODD, où nous œuvrons pour un impact positif dans les communautés. Explorez nos actions concrètes.
            </p>

                

          
            <div class="br-sociprodd-1 p-2 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee">
                <div class="nav nav-tabs mb-1 gap-1" id="nav-tab" role="tablist">
                    <button class="nav-link fw-semi-bold text-sociprodd-jaune active" id="nav-non-vue-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-non-vue" type="button" role="tab" aria-controls="nav-non-vue"
                        aria-selected="true">En cours</button>
                    <button class="nav-link fw-semi-bold text-sociprodd-jaune" id="nav-atente-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-atente" type="button" role="tab" aria-controls="nav-atente"
                        aria-selected="false">En attente</button>
                    <button class="nav-link fw-semi-bold text-sociprodd-jaune" id="nav-vue-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-vue" type="button" role="tab" aria-controls="nav-vue"
                        aria-selected="false">Terminer</button>
                </div>
            </div>    
                   
                
            <div class="br-sociprodd-1 p-4 bdr-sociprodd-all-bleuefoncee mt-4"> 
                <div class="tab-content" id="nav-tabContent">
                    
                    <div class="tab-pane fade show active" id="nav-non-vue" role="tabpanel" aria-labelledby="nav-non-vue-tab">
                        
                            
                            <div class="text-center">
                                <img src="/principale/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
                            </div>
                            <h2>Il n'ya pas de projets pour vous ! </h2>
                        
                        
                    </div>
                    
                    <div class="tab-pane fade" id="nav-atente" role="tabpanel" aria-labelledby="nav-atente-tab"> 
                        
                        
                            
                            <div class="text-center">
                                <img src="/principale/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
                            </div>
                            <h2>Il n'ya pas de projets pour vous ! </h2>
                        
                    
                    </div>
                    
                    <div class="tab-pane fade" id="nav-vue" role="tabpanel" aria-labelledby="nav-vue-tab">
                            
                        
    
                            <div class="text-center">
                                <img src="/principale/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
                            </div>
                            <h2>Il n'ya pas de projets pour vous ! </h2>
                                    
                    </div>
                    
                    
                </div>
            </div>          
        




        </div>
    </div>
    <!-- Projets SOCIPRODD -->




@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

   
@endsection