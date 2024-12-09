@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Newsletter | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Rejoignez-nous pour faire la différence en vous inscrivant à notre newsletter." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Newsletter | SOCIPRODD" />
    <meta property="og:description" content="Rejoignez-nous pour faire la différence en vous inscrivant à notre newsletter." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/agir-avec-nous/newsletter" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Newsletter | SOCIPRODD" />
    <meta name="twitter:url" content="https://www.sociprodd.org/agir-avec-nous/newsletter" />
    <meta name="twitter:description" content="Rejoignez-nous pour faire la différence en vous inscrivant à notre newsletter." />
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
    <link rel="canonical" href="https://sociprodd.org/agir-avec-nous/newsletter" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/agir-avec-nous/newsletter" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/agir-avec-nous/newsletter" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/agir-avec-nous/newsletter" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/agir-avec-nous/newsletter",
                    "name": "Newsletter | SOCIPRODD",
                    "url": "https://www.sociprodd.org/agir-avec-nous/newsletter",
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
                                "name": "Newsletter",
                                "item": "https://www.sociprodd.org/agir-avec-nous/newsletter"
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Newsletter</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('agir-avec-nous.acceuil') }}">Agir avec nous</a></li>
                    <li class="breadcrumb-item text-sociprodd-blanc">Newsletter</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    
    </div>
    <!-- Navbar & Hero End -->

    
    <!-- Newsletter SOCIPRODD -->
    <div class="container-fluid py-5 mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-8">
            <h1 class="text-sociprodd-bleuefoncee mt-5 mb-3">Inscrivez-vous à SOCIPRODD Newsletter</h1>
            <p class="text-sociprodd-bleuefoncee p-clasique mb-5">
                Vous recevrez un e-mail chaque mois présentant des campagnes, des nouvelles et des histoires inspirantes.
            </p>

            

         
            <!-- Newsletter -->
            <div class="bg-sociprodd-bleuefoncee img-border-radius">
                <div class="d-flex flex-column p-2">
                    <h4 class="text-sociprodd-jaune mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="rgba(218,202,12,1)"><path d="M2 5.5V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5ZM0 10H5V12H0V10ZM0 15H8V17H0V15Z"></path></svg>
                        Newsletter
                    </h4>
                    <p class="text-sociprodd-blanc">Rejoignez-nous pour faire la différence ! Inscrivez-vous à notre lettre d'information pour rester informé sur notre organisation humanitaire et nos dons à impact.</p>
                
                    <form action="">
                        
                        <div class="newsletter_form">
                            <input class="br-sociprodd-1" type="email" id="email_newsletter" name="email_newsletter" placeholder="adresse mail" required>
                        </div>
                        <div class="text-end mb-5">
                            <button type="submit" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-2 px-3">Inscription</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Newsletter -->


        </div>
    </div>
    <!-- Newsletter SOCIPRODD -->




@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

   
@endsection