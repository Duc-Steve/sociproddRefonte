@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Droits, Libertés et Vulnérabilité | SOCIPRODD </title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Explorez comment la SOCIPRODD s'engage à protéger les droits, renforcer les libertés et soutenir les personnes vulnérables grâce à des actions concrètes et des outils éducatifs." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Droits, Libertés et Vulnérabilité | SOCIPRODD " />
    <meta property="og:description" content="Explorez comment la SOCIPRODD s'engage à protéger les droits, renforcer les libertés et soutenir les personnes vulnérables grâce à des actions concrètes et des outils éducatifs." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/ce-que-nous-faisons/droits-liberte-vulnerable" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Droits, Libertés et Vulnérabilité | SOCIPRODD " />
    <meta name="twitter:url" content="https://sociprodd.org/ce-que-nous-faisons/droits-liberte-vulnerable" />
    <meta name="twitter:description" content="Explorez comment la SOCIPRODD s'engage à protéger les droits, renforcer les libertés et soutenir les personnes vulnérables grâce à des actions concrètes et des outils éducatifs." />
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
    <link rel="canonical" href="https://sociprodd.org/ce-que-nous-faisons/droits-liberte-vulnerable" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/ce-que-nous-faisons/droits-liberte-vulnerable" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/ce-que-nous-faisons/droits-liberte-vulnerable" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/ce-que-nous-faisons/droits-liberte-vulnerable" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/ce-que-nous-faisons/droits-liberte-vulnerable",
                    "name": "Droits, Libertés et Vulnérabilité | SOCIPRODD",
                    "url": "https://www.sociprodd.org/ce-que-nous-faisons/droits-liberte-vulnerable",
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
                                "name": "Droits, Libertés et Vulnérabilité",
                                "item": "https://www.sociprodd.org/ce-que-nous-faisons/droits-liberte-vulnerable"
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

    <!-- Droits, libertés et Vulnérable -->
    <div class="fond-fixe-droitlibertevulnerable-image">

        <div class="container-fluid py-5 mt-5 d-flex justify-content-start content">
            
            <div class="col-lg-5">

                <!-- Pour Ordinateur -->
                <div class="d-none d-lg-block p-4 pt-5">
                    <h1 class="text-sociprodd-jaune mb-3 pt-3">Promouvoir et défendre les droits humains et les libertés et particulièrement ceux des personnes vulnérables.</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        La protection des droits humains et des libertés fondamentales constitue un enjeu majeur, particulièrement dans des contextes où les contraintes institutionnelles freinent les efforts des organisations de la société civile. Consciente de ces défis, la SOCIPRODD adopte une approche proactive axée sur l’éducation des citoyens à leurs droits, devoirs et aux lois qui les régissent. Cette démarche éducative est un levier essentiel pour prévenir les violations des droits humains et promouvoir une citoyenneté éclairée.  
                        <br><br>
                        Par ailleurs, la SOCIPRODD dispose d’un service interne spécialisé, dédié à l’assistance des victimes de violations, offrant accompagnement juridique et soutien psychologique. Nous concentrons également nos efforts sur la défense des droits des personnes vulnérables, notamment les femmes, les enfants, et les populations marginalisées, souvent confrontées à des inégalités sociales, économiques ou culturelles.  
                        <br><br>
                        En militant pour une société plus juste et équitable, nous cherchons à renforcer la résilience des communautés, tout en plaidant pour des réformes structurelles favorisant la protection des droits humains et l’inclusion sociale. Avec la SOCIPRODD, chaque individu peut devenir acteur de changement et contribuer à un avenir où les droits et libertés sont respectés pour tous.
                    </p>

                </div>
                
                <!-- Pour Téléphone -->
                <div class="d-block d-lg-none pt-5">
                    <h1 class="text-sociprodd-jaune mb-3">Promouvoir et défendre les droits humains et les libertés et particulièrement ceux des personnes vulnérables.</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        La protection des droits humains est essentielle, notamment dans les contextes où les contraintes institutionnelles limitent l'action des organisations civiles. La SOCIPRODD se concentre sur l'éducation citoyenne pour sensibiliser aux droits et devoirs, prévenant ainsi les violations et favorisant une citoyenneté éclairée.<br><br>
                        Nous offrons un accompagnement juridique et psychologique aux victimes, en mettant particulièrement l'accent sur les droits des femmes, des enfants et des populations vulnérables.<br><br>
                        SOCIPRODD milite pour une société plus équitable, en renforçant les communautés et en plaidant pour des réformes inclusives pour garantir le respect des droits pour tous.
                    </p>

                </div>


            </div>
            
        
        </div>


    </div>


    <div class="container-fluid bg-sociprodd-blanc d-flex justify-content-center align-items-center py-5">
        <div class="col-lg-8">


            <h3>Questions Générales <small>(3)</small></h3>
            <p class="text-sociprodd-bleuefoncee">Retrouvez ici des réponses aux questions fréquemment posées sur notre mission des droits humains et les libertés et particulièrement ceux des personnes vulnérables.</p>
            <div class="accordion toggle fancy radius clean mb-5">
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Comment la SOCIPRODD aide-t-elle les citoyens à comprendre la loi ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Nous organisons des ateliers, des séminaires, et mettons à disposition des guides pratiques ainsi que des supports numériques interactifs, pour rendre les lois fondamentales accessibles à tous, notamment dans les zones rurales." Cela évite la répétition de "nous proposons" et apporte un peu plus de variété.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Quelles sont les lois fondamentales enseignées par la SOCIPRODD ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Nous mettons l'accent sur les droits fondamentaux, tels que les droits humains, les droits civils, ainsi que les lois relatives à la famille, au travail, et aux conflits de voisinage, qui sont cruciaux pour l’épanouissement personnel et collectif des citoyens.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>La SOCIPRODD intervient-elle dans les écoles ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Oui, nous collaborons avec des établissements scolaires et des universités afin d'intégrer l’éducation juridique dans les programmes scolaires et organisons des séances spéciales pour sensibiliser les jeunes à leurs droits et devoirs, afin de les préparer à devenir des citoyens responsables et éclairés.
                    </div>
                </div>
            </div>

            
            <div class="row bg-sociprodd-bleueclaire br-sociprodd-1">
                <div class="col-lg-6 p-3">
                    <img src="/principale/public/assets/images/droits-libertes-vulnerables.jpg" class="img-fluid bdr-sociprodd-all-jaune w-100 img-border-radius" alt="Image">
                    
                </div>
                <div class="col-lg-6 p-4">
                    <h2 class="text-sociprodd-jaune mb-3">Promouvoir et défendre les droits humains et libertés et particulièrement ceux des personnes vulnérables</h2>
                    <p class="text-sociprodd-blanc">La protection des droits humains et des libertés reste un défi pour les organisations de la société civile qui peinent à atteindre leurs objectifs au regard de certaines contraintes étatiques. La SOCIPRODD dans sa démarche éduque préalablement les citoyens sur leurs droits et devoirs et sur les lois les concernant. Cela participe à la protection directe de leurs droits car l’éducation participe à la prévention. Nous disposons d’un service interne spécialisé pour la défense des droits des personnes victimes des violations. Nous militons davantage pour les causes des personnes vulnérables.</p>
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
    <!-- Droits, libertés et Vulnérable -->


@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

    <script src="/principale/public/assets/js/clickquestionreponse.js"></script>

   
@endsection