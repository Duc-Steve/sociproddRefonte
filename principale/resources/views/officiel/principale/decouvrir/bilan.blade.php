@extends('layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Bilan 2023 | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Découvrez le bilan annuel 2023 de SOCIPRODD : les principales réalisations, projets marquants et chiffres clés de l'année." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Bilan 2023 | SOCIPRODD" />
    <meta property="og:description" content="Découvrez le bilan annuel 2023 de SOCIPRODD : les principales réalisations, projets marquants et chiffres clés de l'année." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/decouvrir-sociprodd/bilan" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Bilan 2023 | SOCIPRODD" />
    <meta name="twitter:url" content="https://sociprodd.org/decouvrir-sociprodd/bilan" />
    <meta name="twitter:description" content="Découvrez le bilan annuel 2023 de SOCIPRODD : les principales réalisations, projets marquants et chiffres clés de l'année." />
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
    <link rel="canonical" href="https://sociprodd.org/decouvrir-sociprodd/bilan" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/decouvrir-sociprodd/bilan" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/decouvrir-sociprodd/bilan" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/decouvrir-sociprodd/bilan" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/decouvrir-sociprodd/bilan",
                    "name": "Bilan 2023 | SOCIPRODD",
                    "url": "https://www.sociprodd.org/decouvrir-sociprodd/bilan",
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
                                "name": "Bilan 2023",
                                "item": "https://www.sociprodd.org/decouvrir-sociprodd/bilan"
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Bilan 2023</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('decouvrir-sociprodd.acceuil') }}">Découvrir SOCIPRODD</a></li>
                    <li class="breadcrumb-item text-sociprodd-blanc">Bilan 2023</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->
    
    <!-- Bilan 2023 start -->
    <div class="container-fluid py-5 mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-7">

            <h1 class="text-sociprodd-bleuefoncee mt-4 mb-3">Télécharger les rapports annuels</h1>

            <div class="row mt-5">
                <div class="col-lg-4"><a href="" class="bg-sociprodd-bleuefoncee text-sociprodd-blanc br-sociprodd-1 p-2 px-3">Rapport des états financiers</a></div>
                <div class="col-lg-4"><a href="" class="bg-sociprodd-bleuefoncee text-sociprodd-blanc br-sociprodd-1 p-2 px-3">Rapport de communication globale</a></div>
                <div class="col-lg-4"><a href="" class="bg-sociprodd-bleuefoncee text-sociprodd-blanc br-sociprodd-1 p-2 px-3">Rapport stratégique</a></div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6"><a href="" class="bg-sociprodd-bleuefoncee text-sociprodd-blanc br-sociprodd-1 p-2 px-3">Rapport d'impact</a></div>
                <div class="col-lg-6"><a href="" class="bg-sociprodd-bleuefoncee text-sociprodd-blanc br-sociprodd-1 p-2 px-3">Rapport d'activité</a></div>
            </div>

            <p class="text-sociprodd-bleuefoncee mt-5 p-clasique">
                Découvrez nos rapports annuels qui reflètent notre engagement envers la transparence, l'innovation et l'impact social. Chaque document met en lumière nos réalisations, nos stratégies, et notre vision pour un développement durable. Téléchargez nos rapports pour mieux comprendre notre travail et nos contributions à la promotion des droits et devoirs au sein des communautés.
            </p>

            <div class="wow fadeIn mt-5" style="z-index: 10;" data-wow-delay="0.1s">
                <div class="bdr-sociprodd-all-bleueclaire img-border-radius" style="height: 500px;">
                    <img src="/principale/public/assets/images/Logo-SOCIPRODD.png" alt="" class="w-100 h-100">
                </div>
            </div>
            

            <h1 class="text-sociprodd-bleuefoncee mt-5 mb-3">Suivez nous !</h1>

            <ul>
                <li>Infos : <a href=""  class="text-sociprodd-bleueclaire p-clasique">Nos <u>Actualités</u></a></li>
                <li>Tags : <a href=""  class="text-sociprodd-bleueclaire p-clasique">Nos <u>Réalisations</u></a></li>
            </ul>

        </div>
    </div>
    <!-- Bilan 2023 -->


@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

   
@endsection