@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Bonne gouvernance et développement social | SOCIPRODD </title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Explorez les initiatives de la SOCIPRODD pour promouvoir une bonne gouvernance et stimuler le développement social, en favorisant l'inclusion, l'autonomisation des communautés et l'accès équitable aux ressources et opportunités pour tous." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Bonne gouvernance et développement social | SOCIPRODD " />
    <meta property="og:description" content="Explorez les initiatives de la SOCIPRODD pour promouvoir une bonne gouvernance et stimuler le développement social, en favorisant l'inclusion, l'autonomisation des communautés et l'accès équitable aux ressources et opportunités pour tous." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/ce-que-nous-faisons/gouvernance-developpement" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Bonne gouvernance et développement social | SOCIPRODD " />
    <meta name="twitter:url" content="https://sociprodd.org/ce-que-nous-faisons/gouvernance-developpement" />
    <meta name="twitter:description" content="Explorez les initiatives de la SOCIPRODD pour promouvoir une bonne gouvernance et stimuler le développement social, en favorisant l'inclusion, l'autonomisation des communautés et l'accès équitable aux ressources et opportunités pour tous." />
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
    <link rel="canonical" href="https://sociprodd.org/ce-que-nous-faisons/gouvernance-developpement" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/ce-que-nous-faisons/gouvernance-developpement" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/ce-que-nous-faisons/gouvernance-developpement" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/ce-que-nous-faisons/gouvernance-developpement" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/ce-que-nous-faisons/gouvernance-developpement",
                    "name": "Bonne gouvernance et développement social | SOCIPRODD",
                    "url": "https://www.sociprodd.org/ce-que-nous-faisons/gouvernance-developpement",
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
                                "name": "Bonne gouvernance et développement social",
                                "item": "https://www.sociprodd.org/ce-que-nous-faisons/gouvernance-developpement"
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

    <!-- Bonne gouvernance et développement social -->
    <div class="fond-fixe-gouvernancedeveloppement-image">

        <div class="container-fluid py-5 mt-5 d-flex justify-content-start content">
            
            <div class="col-lg-5">

                <!-- Pour Ordinateur -->
                <div class="d-none d-lg-block p-4">
                    <h1 class="text-sociprodd-jaune mb-3 pt-3">Promouvoir la bonne gouvernance et le développement social.</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        La SOCIPRODD se distingue par son engagement à renforcer la bonne gouvernance, un élément essentiel pour construire des sociétés transparentes et équitables. L'organisation met en place des programmes de formation pour les leaders politiques et administratifs, visant à améliorer leur efficacité, leur responsabilité et leur transparence. Ces initiatives permettent aux gouvernants de mieux répondre aux besoins de la population, renforçant ainsi la confiance des citoyens envers les institutions publiques.
                        <br><br>
                        La lutte contre la corruption constitue l'une des priorités de la SOCIPRODD. En mettant en place des stratégies de sensibilisation et de surveillance, elle aide à créer un environnement plus éthique et responsable. En collaborant avec des institutions locales et internationales, l'ONG milite pour des politiques publiques visant à éliminer les pratiques corruptives qui freinent le développement socio-économique des pays.
                        <br><br>
                        Dans le domaine du développement social, la SOCIPRODD œuvre pour garantir l'accès à l'éducation, aux soins de santé et à d'autres services essentiels. À travers des projets d'inclusion sociale, l'ONG soutient les populations vulnérables en leur offrant des opportunités d'amélioration de leurs conditions de vie. Elle met également en place des programmes de sensibilisation qui visent à réduire les inégalités et à promouvoir la solidarité au sein des communautés.
                        <br><br>
                        Enfin, la SOCIPRODD participe activement à l'autonomisation des individus, en particulier des femmes et des jeunes, pour les intégrer pleinement dans la dynamique de développement. Par le biais de formations, de soutiens financiers et d'ateliers pratiques, l'organisation offre aux communautés les outils nécessaires pour améliorer leur bien-être et renforcer leur rôle dans la société. Ces actions visent à construire des sociétés plus justes, où chaque individu a une place et des opportunités égales.
                    </p>

                </div>
                
                <!-- Pour Téléphone -->
                <div class="d-block d-lg-none pt-5">
                    <h1 class="text-sociprodd-jaune mb-3">Promouvoir la bonne gouvernance et le développement social.</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        La SOCIPRODD s'engage pour une gouvernance transparente et responsable en formant les leaders politiques et administratifs pour améliorer leur efficacité et renforcer la confiance des citoyens envers les institutions publiques.<br><br>
                        L'ONG lutte contre la corruption en sensibilisant et en mettant en place des stratégies de surveillance pour éradiquer les pratiques corruptives freinant le développement socio-économique.<br><br>
                        Elle soutient également la mise en place de réformes de gouvernance pour une gestion plus équitable des ressources publiques et un développement durable pour tous.
                    </p>

                </div>


            </div>
            
        
        </div>


    </div>


    <div class="container-fluid bg-sociprodd-blanc d-flex justify-content-center align-items-center py-5">
        <div class="col-lg-8">


            <h3>Questions Générales <small>(2)</small></h3>
            <p class="text-sociprodd-bleuefoncee">Retrouvez ici des réponses aux questions fréquemment posées sur notre mission de la promotion de la bonne gouvernance et du développement social</p>
            <div class="accordion toggle fancy radius clean mb-5">
                
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Pourquoi la bonne gouvernance est-elle essentielle pour le développement social ?
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                    La bonne gouvernance est essentielle pour le développement social car elle assure une gestion transparente, responsable et équitable des ressources publiques. Elle permet de renforcer la confiance des citoyens dans les institutions, d'améliorer l'accès aux services de base tels que l'éducation et la santé, et de favoriser une distribution plus juste des opportunités, ce qui conduit à un développement durable et à la réduction des inégalités sociales.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Comment la SOCIPRODD lutte-t-elle contre la corruption pour favoriser un développement social durable ?
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                    La SOCIPRODD lutte contre la corruption en mettant en place des programmes de sensibilisation, en favorisant la transparence des processus gouvernementaux et en collaborant avec des institutions locales et internationales. Elle milite pour l’adoption de politiques publiques anti-corruption et soutient la mise en œuvre de mécanismes de surveillance pour garantir une gestion éthique des ressources publiques, condition préalable à un développement social inclusif et durable.
                    </div>
                </div>
            </div>

            
            <div class="row bg-sociprodd-bleueclaire br-sociprodd-1">
                <div class="col-lg-6 p-3">
                    <img src="/principale/public/assets/images/gouvernance-developpement.jpg" class="img-fluid bdr-sociprodd-all-jaune w-100 img-border-radius" alt="Image">
                    
                </div>
                <div class="col-lg-6 p-4">
                    <h2 class="text-sociprodd-jaune mb-3">Promouvoir la bonne gouvernance et le développement social</h2>
                    <p class="text-sociprodd-blanc">Les actions de la SOCIPRODD visent à soutenir la gouvernance par des initiatives axées sur le renforcement des capacités des gouvernants, la lutte contre la corruption, etc. Elle œuvre également pour le développement par des initiatives.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid bg-sociprodd-bleuefoncee d-flex justify-content-center align-items-center py-5">
        <div class="col-lg-8">
                
            <h1 class="text-sociprodd-blanc mb-5">Page annexe</h1>

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
            </div>
        </div>

    </div>
    <!-- Bonne gouvernance et développement social -->


@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

    <script src="/principale/public/assets/js/clickquestionreponse.js"></script>

   
@endsection