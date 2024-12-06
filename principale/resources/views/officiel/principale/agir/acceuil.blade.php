@extends('layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Agir avec nous | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Participez activement aux initiatives de SOCIPRODD pour promouvoir les droits et devoirs. Ensemble, construisons un avenir meilleur pour nos communautés." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Agir avec nous | SOCIPRODD" />
    <meta property="og:description" content="Participez activement aux initiatives de SOCIPRODD pour promouvoir les droits et devoirs. Ensemble, construisons un avenir meilleur pour nos communautés." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/agir-avec-nous" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Agir avec nous | SOCIPRODD" />
    <meta name="twitter:url" content="https://www.sociprodd.org/agir-avec-nous" />
    <meta name="twitter:description" content="Participez activement aux initiatives de SOCIPRODD pour promouvoir les droits et devoirs. Ensemble, construisons un avenir meilleur pour nos communautés." />
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
    <link rel="canonical" href="https://sociprodd.org/agir-avec-nous" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/agir-avec-nous" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/agir-avec-nous" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/agir-avec-nous" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/agir-avec-nous",
                    "name": "Agir avec nous | SOCIPRODD",
                    "url": "https://www.sociprodd.org/agir-avec-nous",
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
                                "name": "Agir avec nous",
                                "item": "https://www.sociprodd.org/agir-avec-nous"
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
    
    </div>
    <!-- Navbar & Hero End -->

    
    <!-- Découvrirtart -->
    <div class="container-fluid py-5 mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-8">
        <h1 class="text-sociprodd-bleuefoncee mt-5 mb-3">Agir avec SOCIPRODD</h1>
            <p class="text-sociprodd-bleuefoncee p-clasique mb-5">Rejoignez-nous dans nos actions pour un développement durable et équitable. Votre engagement fait la différence.</p>
            <div class="row mb-4">
                <div class="col-lg-6 mb-3">
                    <img src="/principale/public/assets/images/businessman-touching-red-icon-connected.jpg" alt="" class="img-fluid w-100 img-border-radius">
                </div>
                <div class="col-lg-6 mb-3 p-3 d-flex flex-column gap-2">
                    <h1 class="text-sociprodd-bleueclaire">L'Organisation</h1>
                    <p class="text-sociprodd-bleuefoncee">Découvrez comment nous gérons notre organisation pour contribuer à créer un monde où nous sommes tous égaux.</p>
                    <a href="{{ route('decouvrir-sociprodd.organisation') }}" class="bg-sociprodd-jaune p-2 px-3 text-sociprodd-bleuefoncee br-sociprodd-1 text-center">En savoir plus</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 mb-3 p-3 d-flex flex-column gap-2">
                    <h1 class="text-sociprodd-bleueclaire">Contactez-nous</h1>
                    <p class="text-sociprodd-bleuefoncee">Trouvez les coordonnées de notre sécrétariat permanent..</p>
                    <a href="{{ route('decouvrir-sociprodd.contacts') }}" class="bg-sociprodd-jaune p-2 px-3 text-sociprodd-bleuefoncee br-sociprodd-1 text-center">Contactez-nous</a>
                </div>
                <div class="col-lg-6 mb-3">
                    <img src="/principale/public/assets/images/candid-shot-attractive-young-african-woman-with-curly-hair-wearing-wrap-talking-mobile-phone.jpg" alt="" class="img-fluid w-100 img-border-radius">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6 mb-3 img-border-radius">
                    <img src="/principale/public/assets/images/front-view-employees-working-together.jpg" alt="" class="img-fluid w-100 img-border-radius">
                </div>
                <div class="col-lg-6 mb-3 p-3 d-flex flex-column gap-2">
                    <h1 class="text-sociprodd-bleueclaire">Bilan anuelle 2023</h1>
                    <p class="text-sociprodd-bleuefoncee">Dans ce rapport, vous découvrirez comment nous nous efforçons d’avoir un plus grand impact.</p>
                    <a href="{{ route('decouvrir-sociprodd.bilan') }}" class="bg-sociprodd-jaune p-2 px-3 text-sociprodd-bleuefoncee br-sociprodd-1 text-center">En savoir plus</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3 p-3 d-flex flex-column gap-2">
                    <h1 class="text-sociprodd-bleueclaire">Localisation</h1>
                    <p class="text-sociprodd-bleuefoncee">Trouvez la géolocalisation de la SOCIPRODD Centrale</p>
                    <a href="{{ route('decouvrir-sociprodd.localisation') }}" class="bg-sociprodd-jaune p-2 px-3 text-sociprodd-bleuefoncee br-sociprodd-1 text-center">En savoir plus</a>
                </div>
                <div class="col-lg-6 mb-3">
                    <img src="/principale/public/assets/images/close-up-hand-holding-smartphone.jpg" alt="" class="img-fluid w-100 img-border-radius">
                </div>
            </div>


        </div>
    </div>
    <!-- Découvrirnd -->


@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

   
@endsection