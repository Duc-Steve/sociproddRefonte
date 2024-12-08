@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>L'Organisation | SOCIPRODD </title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Rejoignez-nous pour explorer notre mission et nos initiatives visant à promouvoir les droits et devoirs dans nos sociétés." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="L'Organisation | SOCIPRODD " />
    <meta property="og:description" content="Rejoignez-nous pour explorer notre mission et nos initiatives visant à promouvoir les droits et devoirs dans nos sociétés." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/decouvrir-sociprodd/organisation" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="L'Organisation | SOCIPRODD " />
    <meta name="twitter:url" content="https://sociprodd.org/decouvrir-sociprodd/organisation" />
    <meta name="twitter:description" content="Rejoignez-nous pour explorer notre mission et nos initiatives visant à promouvoir les droits et devoirs dans nos sociétés." />
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
    <link rel="canonical" href="https://sociprodd.org/decouvrir-sociprodd/organisation" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/decouvrir-sociprodd/organisation" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/decouvrir-sociprodd/organisation" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/decouvrir-sociprodd/organisation" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/decouvrir-sociprodd/organisation",
                    "name": "L'Organisation | SOCIPRODD",
                    "url": "https://www.sociprodd.org/decouvrir-sociprodd/organisation",
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
                                "name": "L'Organisation",
                                "item": "https://www.sociprodd.org/decouvrir-sociprodd/organisation"
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">l'Organisation</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('decouvrir-sociprodd.acceuil') }}">Découvrir SOCIPRODD</a></li>
                    <li class="breadcrumb-item text-sociprodd-blanc">l'Organisation</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <!-- Organisation Start -->
    <div class="container-fluid py-5 mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-5">

            <h1 class="text-sociprodd-bleuefoncee mb-3">L'organisation</h1>
            <p class="text-sociprodd-bleuefoncee p-clasique">
                Fondée en 2018, La SOCIPRODD est une organisation humanitaire créée pour donner un sens à l’adage 
                « nul n’est censé ignorer la loi ». Cet adage connu de tous n’est pas une réalité sur le terrain car 
                beaucoup de citoyens en Afrique ignorent toujours les lois et ne sont pour la plupart informés des lois 
                que le jour où ils ont commis des infractions. La SOCIPRODD s’est donc donnée comme mission de promouvoir 
                l’éducation juridique à l’ensemble des populations afin de réduire le taux d’ignorance des lois source de 
                nombreuses violations des droits humains et des libertés et surtout prévenir l’extrémisme violent découlant 
                de l’ignorance de la règle de droit régissant la société. Celui qui ignore les lois est à la fois une victime 
                et également un bourreau. Une victime parce que à cause de son ignorance, il sera abusé et un bourreau parce 
                que à cause de son ignorance, il va abuser. La SOCIPRODD travaille avec toutes les couches sociales et 
                particulièrement celles vulnérables pour leur bien-être. Pour l’atteinte de ses objectifs en matière de 
                développement social, elle travaille également avec des partenaires. Nous nous penchons sur les difficultés 
                et défis auxquels sont confrontés les individus et la société.
            </p>

            

            <div class="wow fadeIn" style="z-index: 10;" data-wow-delay="0.1s">
                <div class="video bdr-sociprodd-all-bleueclaire img-border-radius">
                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/ZvA1KWYLVTU?si=8kCRWFQzHm_47hs0" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <!-- Modal Video -->
            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header position-relative">
                            <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-16x9 position-relative">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZvA1KWYLVTU?si=8kCRWFQzHm_47hs0" 
                                    id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <h1 class="text-sociprodd-bleuefoncee mb-3 mt-4">Nos objectifs</h1>
            <ul>
                <li class="text-sociprodd-bleueclaire p-clasique">Promouvoir l’éducation juridique à l’ensemble des populations afin de réduire le taux 
                    d’ignorance des lois cause de plusieurs infractions et violations des droits.</li>
                <li class="text-sociprodd-bleueclaire p-clasique">Promouvoir et défendre les Droits humains et les Libertés et particulièrement celles des 
                    personnes vulnérables</li>
                <li class="text-sociprodd-bleueclaire p-clasique">Promouvoir l’égalité de genre </li>
                <li class="text-sociprodd-bleueclaire p-clasique">Favoriser l’inclusion et l’autonomisation des couches sociales défavorisées</li>
                <li class="text-sociprodd-bleueclaire p-clasique">Promouvoir la bonne gouvernance et le développement social</li>
            </ul>
            <p class="text-sociprodd-bleuefoncee p-clasique">
                Nous travaillons avec plusieurs communautés et partenaires sur le plan national et international. Nous disposons des représentations en création dans plusieurs pays dans le monde. Nous nous efforçons d’avoir un impact significatif et durable, à grande échelle pour garantir que les enfants, les personnes déplacées de forces, les femmes, les personnes âgées, les jeunes, (…) et leurs communautés aient accès à la justice, à l’éducation de qualité et inclusive, à la protection, à la nutrition, au logement, à des informations et services de santé, ainsi qu’à des opportunités de travail décent et d’entrepreneuriat. Nous travaillons pour le développement des communautés et des sociétés et nous accompagnement l’Etat et les organismes de développement pour l’atteinte de leur objectif en matière de développement durable.
            </p>

            
            <h1 class="text-sociprodd-jaune mb-3 mt-4">En savoir plus sur :</h1>
            <ul>
                <li><a href="{{ route('decouvrir-sociprodd.structure') }}"  class="text-sociprodd-bleueclaire p-clasique">La <u>structure</u> de notre organisation</a></li>
                <li><a href="{{ route('decouvrir-sociprodd.travaillons') }}"  class="text-sociprodd-bleueclaire p-clasique">Comment <u>nous</u> travaillons</a></li>
            </ul>
        </div>
    </div>
    <!-- Organisation End -->




@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

   
@endsection