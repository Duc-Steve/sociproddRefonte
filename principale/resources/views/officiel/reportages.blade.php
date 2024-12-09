@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Reportages | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Plongez au cœur des actions de la SOCIPRODD à travers nos reportages sur les projets et événements marquants." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Reportages | SOCIPRODD" />
    <meta property="og:description" content="Plongez au cœur des actions de la SOCIPRODD à travers nos reportages sur les projets et événements marquants." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/reportages" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Reportages | SOCIPRODD" />
    <meta name="twitter:url" content="https://sociprodd.org/reportages" />
    <meta name="twitter:description" content="Plongez au cœur des actions de la SOCIPRODD à travers nos reportages sur les projets et événements marquants." />
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
    <link rel="canonical" href="https://sociprodd.org/reportages" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/reportages" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/reportages" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/reportages" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://sociprodd.org/reportages",
                    "name": "Reportages | SOCIPRODD",
                    "url": "https://sociprodd.org/reportages",
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
                                "name": "Reportages",
                                "item": "https://sociprodd.org/reportages"
                            }
                        ]
                    },
                    "publisher": {
                        "@type": "Organization",
                        "name": "SOCIPRODD",
                        "url": "https://sociprodd.org",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "https://sociprodd.org/reportages/principale/public/assets/images/Logo-SOCIPRODD.png"
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Reportages</h4>  
            </div>
        </div>
        <!-- Header End -->
    
    </div>
    <!-- Navbar & Hero End -->

    

    <!-- Reportages Start -->
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <h2 class="mb-5">Suivez les actions et initiatives majeures de la SOCIPRODD en images ou vidéos et en récits.</h2>
        </div>
        <div class="row">

            
            <div class="col-md-6 col-lg-6 col-xl-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
                <iframe 
                    class="ratio ratio-16x9 bdr-sociprodd-all-bleueclaire img-border-radius taille-videos"
                    src="https://www.youtube.com/embed/ZvA1KWYLVTU?si=VavURtHUq6cAKqtv"
                    allowfullscreen>
                </iframe>
            </div>
 
            
            <div class="col-md-6 col-lg-6 col-xl-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
                <iframe 
                    class="ratio ratio-16x9 bdr-sociprodd-all-bleueclaire img-border-radius taille-videos"
                    src="https://www.youtube.com/embed/ZvA1KWYLVTU?si=VavURtHUq6cAKqtv"
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="col-md-6 col-lg-6 col-xl-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
                <iframe 
                    class="ratio ratio-16x9 bdr-sociprodd-all-bleueclaire img-border-radius taille-videos"
                    src="https://www.youtube.com/embed/ZvA1KWYLVTU?si=VavURtHUq6cAKqtv"
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="col-md-6 col-lg-6 col-xl-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
                <iframe 
                    class="ratio ratio-16x9 bdr-sociprodd-all-bleueclaire img-border-radius taille-videos"
                    src="https://www.youtube.com/embed/ZvA1KWYLVTU?si=VavURtHUq6cAKqtv"
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="col-md-6 col-lg-6 col-xl-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
                <iframe 
                    class="ratio ratio-16x9 bdr-sociprodd-all-bleueclaire img-border-radius taille-videos"
                    src="https://www.youtube.com/embed/ZvA1KWYLVTU?si=VavURtHUq6cAKqtv"
                    allowfullscreen>
                </iframe>
            </div>
            
            <div class="col-md-6 col-lg-6 col-xl-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
                <iframe 
                    class="ratio ratio-16x9 bdr-sociprodd-all-bleueclaire img-border-radius taille-videos"
                    src="https://www.youtube.com/embed/ZvA1KWYLVTU?si=VavURtHUq6cAKqtv"
                    allowfullscreen>
                </iframe>
            </div>
        </div>    
        
    </div>

    <!-- Reportages End -->

    

@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

    
@endsection