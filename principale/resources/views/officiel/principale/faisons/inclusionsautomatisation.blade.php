@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Inclusion et Autonomisation | SOCIPRODD </title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Découvrez comment la SOCIPRODD œuvre pour favoriser l'inclusion sociale et l'autonomisation des couches défavorisées, en promouvant l'accès aux droits, à l'éducation et aux opportunités pour tous." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Inclusion et Autonomisation | SOCIPRODD " />
    <meta property="og:description" content="Découvrez comment la SOCIPRODD œuvre pour favoriser l'inclusion sociale et l'autonomisation des couches défavorisées, en promouvant l'accès aux droits, à l'éducation et aux opportunités pour tous." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/ce-que-nous-faisons/inclusions-Autonomisation" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Inclusion et Autonomisation | SOCIPRODD " />
    <meta name="twitter:url" content="https://sociprodd.org/ce-que-nous-faisons/inclusions-Autonomisation" />
    <meta name="twitter:description" content="Découvrez comment la SOCIPRODD œuvre pour favoriser l'inclusion sociale et l'autonomisation des couches défavorisées, en promouvant l'accès aux droits, à l'éducation et aux opportunités pour tous." />
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
    <link rel="canonical" href="https://sociprodd.org/ce-que-nous-faisons/inclusions-Autonomisation" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/ce-que-nous-faisons/inclusions-Autonomisation" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/ce-que-nous-faisons/inclusions-Autonomisation" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/ce-que-nous-faisons/inclusions-Autonomisation" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/ce-que-nous-faisons/inclusions-Autonomisation",
                    "name": "Inclusion et Autonomisation | SOCIPRODD",
                    "url": "https://www.sociprodd.org/ce-que-nous-faisons/inclusions-Autonomisation",
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
                                "name": "Inclusion et Autonomisation",
                                "item": "https://www.sociprodd.org/ce-que-nous-faisons/inclusions-Autonomisation"
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

    <!-- Inclusion et Autonomisation -->
    <div class="fond-fixe-inclusionsAutonomisation-image">

        <div class="container-fluid py-5 mt-5 d-flex justify-content-start content">
            
            <div class="col-lg-5">

                <!-- Pour Ordinateur -->
                <div class="d-none d-lg-block p-4 pt-5">
                    <h1 class="text-sociprodd-jaune mb-3 pt-3">Favoriser l'inclusion et l'autonomisation des couches sociales défavorisées.</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        Les actions de la SOCIPRODD sont orientées vers l’amélioration des conditions de vie des groupes vulnérables et marginalisés. Nous œuvrons pour promouvoir leur inclusion sociale et économique à travers divers moyens :
                        <ul>
                            <li class="p-clasique"><strong>Accès à l'éducation : </strong>Des programmes de sensibilisation et de soutien scolaire sont mis en place pour garantir l’éducation des enfants issus de familles défavorisées.</li>
                            <li class="p-clasique"><strong>Formation professionnelle : </strong>Nous organisons des ateliers pratiques et techniques pour permettre aux jeunes et aux adultes d'acquérir des compétences utiles pour le marché du travail.</li>
                            <li class="p-clasique"><strong>Emploi et entrepreneuriat : </strong>La SOCIPRODD soutient la création d’emplois locaux et encourage l’entrepreneuriat communautaire pour générer des revenus durables.</li>
                            <li class="p-clasique"><strong>Santé et bien-être : </strong>Nous favorisons l’accès aux soins de santé, à l’information sanitaire et à des infrastructures adaptées aux besoins des populations défavorisées.</li>
                            <li class="p-clasique"><strong>Logement décent : </strong>La SOCIPRODD milite pour des projets d’habitat social afin de garantir un logement sécurisé et salubre à tous.</li>
                            <li class="p-clasique">etc....</li>
                        </ul>
                    </p>
                    <p class="text-sociprodd-blanc p-clasique">
                        Ces initiatives visent à autonomiser les individus en leur fournissant les outils nécessaires pour améliorer durablement leur qualité de vie et contribuer activement à une société plus équitable.
                    </p>

                </div>
                
                <!-- Pour Téléphone -->
                <div class="d-block d-lg-none pt-5">
                    <h1 class="text-sociprodd-jaune mb-3">Favoriser l'inclusion et l'autonomisation des couches sociales défavorisées.</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        Les actions de la SOCIPRODD sont orientées vers l’amélioration des conditions de vie des groupes vulnérables et marginalisés. Nous œuvrons pour promouvoir leur inclusion sociale et économique à travers divers moyens :
                        <ul>
                            <li class="p-clasique"><strong>Accès à l'éducation</strong></li>
                            <li class="p-clasique"><strong>Formation professionnelle</strong></li>
                            <li class="p-clasique"><strong>Emploi et entrepreneuriat</strong></li>
                            <li class="p-clasique"><strong>Santé et bien-être</strong></li>
                            <li class="p-clasique"><strong>Logement décent</strong></li>
                            <li class="p-clasique">etc....</li>
                        </ul>
                    </p>

                    <p class="text-sociprodd-blanc p-clasique">
                        Ces initiatives visent à autonomiser les individus en leur fournissant les outils nécessaires pour améliorer durablement leur qualité de vie et contribuer activement à une société plus équitable.
                    </p>

                </div>


            </div>
            
        
        </div>


    </div>


    <div class="container-fluid bg-sociprodd-blanc d-flex justify-content-center align-items-center py-5">
        <div class="col-lg-8">


            <h3>Questions Générales <small>(4)</small></h3>
            <p class="text-sociprodd-bleuefoncee">Retrouvez ici des réponses aux questions fréquemment posées sur notre mission de favorisation de l'inclusion et de l'autonomisation des couches sociales défavorisées</p>
            <div class="accordion toggle fancy radius clean mb-5">
                
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Comment la SOCIPRODD contribue-t-elle à l'autonomisation des personnes âgées dans les communautés ?
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Nous développons des programmes spécifiques pour les personnes âgées en leur offrant un accès à des soins de santé adaptés, des espaces de socialisation, et des formations pour préserver leur autonomie. La SOCIPRODD milite également pour la création de structures d'accueil pour les personnes âgées en situation de vulnérabilité, en garantissant leur inclusion dans le tissu social.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Quels programmes la SOCIPRODD met-elle en place pour autonomiser les femmes issues de milieux défavorisés ?
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Nous soutenons l'autonomisation des femmes par des programmes qui offrent des formations en entrepreneuriat, des accès à des financements pour leurs projets locaux, et un accompagnement juridique pour faire valoir leurs droits. Nous veillons à ce que les femmes des communautés marginalisées puissent accéder à l'éducation, à des soins de santé adaptés et à des opportunités économiques durables.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Comment la SOCIPRODD favorise-t-elle l’inclusion des personnes en situation de handicap ?
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        La SOCIPRODD œuvre activement pour l'inclusion des personnes en situation de handicap en facilitant leur accès à des formations professionnelles adaptées, à des emplois accessibles et à des espaces publics adaptés. Nous sensibilisons également les communautés locales à la nécessité d'une inclusion sociale réelle, en favorisant des initiatives qui valorisent les compétences des personnes handicapées.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Comment la SOCIPRODD soutient-elle les jeunes issus de milieux défavorisés dans leur quête d'emploi ?
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        La SOCIPRODD soutient les jeunes en situation de vulnérabilité à travers des formations professionnelles, des stages pratiques et des ateliers sur la gestion d’entreprise. Nous offrons également des opportunités de mentorat pour les accompagner dans leur insertion sur le marché de l’emploi, en mettant l’accent sur les métiers porteurs et accessibles.
                    </div>
                </div>
            </div>

            
            <div class="row bg-sociprodd-bleueclaire br-sociprodd-1">
                <div class="col-lg-6 p-3">
                    <img src="/principale/public/assets/images/inclusions-automatisation.jpg" class="img-fluid bdr-sociprodd-all-jaune w-100 img-border-radius" alt="Image">
                    
                </div>
                <div class="col-lg-6 p-4">
                    <h2 class="text-sociprodd-jaune mb-3">Favoriser l'inclusion et l'autonomisation des couches sociales défavorisées</h2>
                    <p class="text-sociprodd-blanc">Les actions de la SOCIPRODD visent à améliorer les conditions dans lesquelles les individus et les groupes peuvent participer à la vie en société. Elles visent à favoriser le bien être des personnes vulnérables et des communautés à travers des formations, l’accès à des emplois décents, à l’éducation, la santé, le logement etc.</p>
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
    <!-- Inclusion et Autonomisation -->


@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

    <script src="/principale/public/assets/js/clickquestionreponse.js"></script>

   
@endsection