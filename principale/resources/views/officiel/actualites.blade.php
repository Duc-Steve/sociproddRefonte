@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Actualités | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Découvrez les dernières actualités de la SOCIPRODD : initiatives, projets, événements et bien plus encore. Restez informé sur nos actions en faveur des droits et devoirs." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Actualités | SOCIPRODD" />
    <meta property="og:description" content="Découvrez les dernières actualités de la SOCIPRODD : initiatives, projets, événements et bien plus encore. Restez informé sur nos actions en faveur des droits et devoirs." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/actualites" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Actualités | SOCIPRODD" />
    <meta name="twitter:url" content="https://sociprodd.org/actualites" />
    <meta name="twitter:description" content="Découvrez les dernières actualités de la SOCIPRODD : initiatives, projets, événements et bien plus encore. Restez informé sur nos actions en faveur des droits et devoirs." />
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
    <link rel="canonical" href="https://sociprodd.org/actualites" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/actualites" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/actualites" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/actualites" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://sociprodd.org/actualites/actualites",
                    "name": "Actualités | SOCIPRODD",
                    "url": "https://sociprodd.org/actualites/actualites",
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
                                "name": "Actualités",
                                "item": "https://sociprodd.org/actualites/actualites"
                            }
                        ]
                    },
                    "publisher": {
                        "@type": "Organization",
                        "name": "SOCIPRODD",
                        "url": "https://sociprodd.org",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "https://sociprodd.org/actualites/principale/public/assets/images/Logo-SOCIPRODD.png"
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Actualités</h4>  
            </div>
        </div>
        <!-- Header End -->
    
    </div>
    <!-- Navbar & Hero End -->

    

    <!-- Actualités Start -->
    <div class="container-fluid element-actualite py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h2 class="mb-5">Restez informé des dernières actualités et initiatives de la SOCIPRODD.</h2>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="element-actualite-item rounded">
                        <div class="element-actualite-img">
                            <div class="overflow-hidden img-border-radius">
                                <img src="/principale/public/assets/images/localisation.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="element-actualite-text bg-sociprodd-bleueclaire br-sociprodd-1 mt-3 px-4 pb-3">
                            <div class="element-actualite-text-inner pt-3">
                                <a href="#" class="h4 text-sociprodd-blanc">English For Today</a>
                                <p class="mt-3 mb-0 text-sociprodd-blanc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                            </div>
                            
                            <div class="text-end p-3 mt-4">
                                <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="element-actualite-item rounded">
                        <div class="element-actualite-img">
                            <div class="overflow-hidden img-border-radius">
                                <img src="/principale/public/assets/images/localisation.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="element-actualite-text bg-sociprodd-bleueclaire br-sociprodd-1 mt-3 px-4 pb-3">
                            <div class="element-actualite-text-inner pt-3">
                                <a href="#" class="h4 text-sociprodd-blanc">English For Today</a>
                                <p class="mt-3 mb-0 text-sociprodd-blanc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                            </div>
                            
                            <div class="text-end p-3 mt-4">
                                <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="element-actualite-item rounded">
                        <div class="element-actualite-img">
                            <div class="overflow-hidden img-border-radius">
                                <img src="/principale/public/assets/images/localisation.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="element-actualite-text bg-sociprodd-bleueclaire br-sociprodd-1 mt-3 px-4 pb-3">
                            <div class="element-actualite-text-inner pt-3">
                                <a href="#" class="h4 text-sociprodd-blanc">English For Today</a>
                                <p class="mt-3 mb-0 text-sociprodd-blanc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                            </div>
                            
                            <div class="text-end p-3 mt-4">
                                <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="element-actualite-item rounded">
                        <div class="element-actualite-img">
                            <div class="overflow-hidden img-border-radius">
                                <img src="/principale/public/assets/images/localisation.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="element-actualite-text bg-sociprodd-bleueclaire br-sociprodd-1 mt-3 px-4 pb-3">
                            <div class="element-actualite-text-inner pt-3">
                                <a href="#" class="h4 text-sociprodd-blanc">English For Today</a>
                                <p class="mt-3 mb-0 text-sociprodd-blanc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                            </div>
                            
                            <div class="text-end p-3 mt-4">
                                <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="element-actualite-item rounded">
                        <div class="element-actualite-img">
                            <div class="overflow-hidden img-border-radius">
                                <img src="/principale/public/assets/images/localisation.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="element-actualite-text bg-sociprodd-bleueclaire br-sociprodd-1 mt-3 px-4 pb-3">
                            <div class="element-actualite-text-inner pt-3">
                                <a href="#" class="h4 text-sociprodd-blanc">English For Today</a>
                                <p class="mt-3 mb-0 text-sociprodd-blanc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                            </div>
                            
                            <div class="text-end p-3 mt-4">
                                <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="element-actualite-item rounded">
                        <div class="element-actualite-img">
                            <div class="overflow-hidden img-border-radius">
                                <img src="/principale/public/assets/images/localisation.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                        </div>
                        <div class="element-actualite-text bg-sociprodd-bleueclaire br-sociprodd-1 mt-3 px-4 pb-3">
                            <div class="element-actualite-text-inner pt-3">
                                <a href="#" class="h4 text-sociprodd-blanc">English For Today</a>
                                <p class="mt-3 mb-0 text-sociprodd-blanc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed purus consectetur,</p>
                            </div>
                            
                            <div class="text-end p-3 mt-4">
                                <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- Actualités Start -->

    

@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

    
@endsection