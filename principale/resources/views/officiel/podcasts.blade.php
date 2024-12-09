@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Podcasts | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Écoutez nos podcasts pour découvrir les initiatives, projets et réflexions de la SOCIPRODD en faveur des communautés" />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Podcasts | SOCIPRODD" />
    <meta property="og:description" content="Écoutez nos podcasts pour découvrir les initiatives, projets et réflexions de la SOCIPRODD en faveur des communautés" />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/podcasts" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Podcasts | SOCIPRODD" />
    <meta name="twitter:url" content="https://sociprodd.org/podcasts" />
    <meta name="twitter:description" content="Écoutez nos podcasts pour découvrir les initiatives, projets et réflexions de la SOCIPRODD en faveur des communautés" />
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
    <link rel="canonical" href="https://sociprodd.org/podcasts" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/podcasts" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/podcasts" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/podcasts" />


    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://sociprodd.org/podcasts",
                    "name": "Podcasts | SOCIPRODD",
                    "url": "https://sociprodd.org/podcasts",
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
                                "name": "Podcasts",
                                "item": "https://sociprodd.org/podcasts"
                            }
                        ]
                    },
                    "publisher": {
                        "@type": "Organization",
                        "name": "SOCIPRODD",
                        "url": "https://sociprodd.org",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "https://sociprodd.org/podcasts/principale/public/assets/images/Logo-SOCIPRODD.png"
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Podcasts</h4>  
            </div>
        </div>
        <!-- Header End -->
    
    </div>
    <!-- Navbar & Hero End -->

    

    <!-- Podcasts Start -->
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <h2 class="mb-5">Explorez nos podcasts pour mieux comprendre les engagements et actions de la SOCIPRODD dans la promotion des droits et devoirs.</h2>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-6 col-xl-4 mt-3">
                    
                <div class="bg-sociprodd-gris br-sociprodd-1 pb-3">
                    <div class="d-none d-lg-block bdr-sociprodd-all-bleueclaire br-sociprodd-1 img-uniforme mb-2">
                        <img src="/principale/public/assets/images/localisation.jpg" class="h-100 w-100" alt="Image">
                    </div>
                    <div class="bdr-sociprodd-all-blanc img-border-radius m-3">
                        <div class="d-flex flex-column gap-2 mt-3 mb-3 p-3">
                            <div class="bg-sociprodd-bleueclaire p-2 d-flex align-items-center br-sociprodd-1">
                                <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
                                    <source src="/principale/public/audio_element_podcast_2024_09_05_190556.mp3" type="audio/mp3" />
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="text-end px-4">
                        <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>Lire plus</a>
                    </div>
                    
                </div>
            </div> 
             
            <div class="col-md-6 col-lg-6 col-xl-4 mt-3">
                    
                <div class="bg-sociprodd-gris br-sociprodd-1 pb-3">
                    <div class="d-none d-lg-block bdr-sociprodd-all-bleueclaire br-sociprodd-1 img-uniforme mb-2">
                        <img src="/principale/public/assets/images/localisation.jpg" class="h-100 w-100" alt="Image">
                    </div>
                    <div class="bdr-sociprodd-all-blanc img-border-radius m-3">
                        <div class="d-flex flex-column gap-2 mt-3 mb-3 p-3">
                            <div class="bg-sociprodd-bleueclaire p-2 d-flex align-items-center br-sociprodd-1">
                                <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
                                    <source src="/principale/public/audio_element_podcast_2024_09_05_190556.mp3" type="audio/mp3" />
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="text-end px-4">
                        <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>Lire plus</a>
                    </div>
                    
                </div>
            </div> 
                
            <div class="col-md-6 col-lg-6 col-xl-4 mt-3">
                    
                <div class="bg-sociprodd-gris br-sociprodd-1 pb-3">
                    <div class="d-none d-lg-block bdr-sociprodd-all-bleueclaire br-sociprodd-1 img-uniforme mb-2">
                        <img src="/principale/public/assets/images/localisation.jpg" class="h-100 w-100" alt="Image">
                    </div>
                    <div class="bdr-sociprodd-all-blanc img-border-radius m-3">
                        <div class="d-flex flex-column gap-2 mt-3 mb-3 p-3">
                            <div class="bg-sociprodd-bleueclaire p-2 d-flex align-items-center br-sociprodd-1">
                                <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
                                    <source src="/principale/public/audio_element_podcast_2024_09_05_190556.mp3" type="audio/mp3" />
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="text-end px-4">
                        <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>Lire plus</a>
                    </div>
                    
                </div>
            </div> 
                
        </div>  
        
    </div>
    <!-- Podcasts End -->

    

@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

    
@endsection