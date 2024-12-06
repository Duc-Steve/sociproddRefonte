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

    
   <!-- Agir avec SOCIPRODD -->
    <div class="container-fluid py-5 mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-8">
            <h1 class="text-sociprodd-bleuefoncee mt-5 mb-3">Agir avec SOCIPRODD</h1>
            <p class="text-sociprodd-bleuefoncee p-clasique mb-5">
                Ensemble, contribuons à un développement durable et équitable. Votre engagement, sous toutes ses formes, fait la différence.
            </p>

            <!-- Section Newsletter -->
            <div class="row mb-4">
                <div class="col-lg-6 mb-3">
                    <img src="/principale/public/assets/images/newsletter.jpg" alt="Newsletter SOCIPRODD" class="img-fluid w-100 img-border-radius">
                </div>
                <div class="col-lg-6 mb-3 p-3 d-flex flex-column gap-2">
                    <h1 class="text-sociprodd-bleueclaire">Restez connectés avec nos actualités</h1>
                    <p class="text-sociprodd-bleuefoncee">
                        Inscrivez-vous à notre newsletter pour suivre nos projets, initiatives et actions. Informez-vous et inspirez-vous pour rejoindre notre mission.
                    </p>
                    <a href="{{ route('agir-avec-nous.newsletter') }}" class="bg-sociprodd-jaune p-2 px-3 text-sociprodd-bleuefoncee br-sociprodd-1 text-center">Inscription gratuite</a>
                </div>
            </div>

            <!-- Section Rejoindre notre réseau -->
            <div class="row mb-4">
                <div class="col-lg-6 mb-3 p-3 d-flex flex-column gap-2">
                    <h1 class="text-sociprodd-bleueclaire">Rejoignez notre réseau</h1>
                    <p class="text-sociprodd-bleuefoncee">
                        Devenez acteur du changement. Découvrez comment collaborer avec nous en tant que partenaire, membre ou bénévole.
                    </p>
                    <a href="{{ route('agir-avec-nous.devenir-membre') }}" class="bg-sociprodd-jaune p-2 px-3 text-sociprodd-bleuefoncee br-sociprodd-1 text-center">Contactez-nous</a>
                </div>
                <div class="col-lg-6 mb-3">
                    <img src="/principale/public/assets/images/membres.jpg" alt="Rejoindre SOCIPRODD" class="img-fluid w-100 img-border-radius">
                </div>
            </div>

            <!-- Section Soutenir nos projets -->
            <div class="row mb-4">
                <div class="col-lg-6 mb-3">
                    <img src="/principale/public/assets/images/project.jpg" alt="Soutenez nos projets SOCIPRODD" class="img-fluid w-100 img-border-radius">
                </div>
                <div class="col-lg-6 mb-3 p-3 d-flex flex-column gap-2">
                    <h1 class="text-sociprodd-bleueclaire">Soutenez nos projets</h1>
                    <p class="text-sociprodd-bleuefoncee">
                        Votre contribution nous aide à renforcer nos actions et à toucher encore plus de vies. Soutenez nos projets pour bâtir un avenir équitable et durable.
                    </p>
                    <a href="{{ route('agir-avec-nous.projets') }}" class="bg-sociprodd-jaune p-2 px-3 text-sociprodd-bleuefoncee br-sociprodd-1 text-center">Faites un don maintenant</a>
                </div>
            </div>

            <!-- Section Travailler avec nous -->
            <div class="row mb-4">
                <div class="col-lg-6 mb-3 p-3 d-flex flex-column gap-2">
                    <h1 class="text-sociprodd-bleueclaire">Travailler avec nous</h1>
                    <p class="text-sociprodd-bleuefoncee">
                        Rejoignez notre équipe pour contribuer directement à notre mission. Consultez nos offres d’emploi et devenez un acteur du changement.
                    </p>
                    <a href="" class="bg-sociprodd-jaune p-2 px-3 text-sociprodd-bleuefoncee br-sociprodd-1 text-center">Voir les offres</a>
                </div>
                <div class="col-lg-6 mb-3">
                    <img src="/principale/public/assets/images/offredemploi.jpg" alt="Offres d'emploi SOCIPRODD" class="img-fluid w-100 img-border-radius">
                </div>
            </div>

        </div>
    </div>
    <!-- Fin Agir avec SOCIPRODD -->




@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

   
@endsection