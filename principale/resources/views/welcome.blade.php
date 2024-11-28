@extends('layouts.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>SOCIPRODD - Société Civile pour la Promotion des Droits et Devoirs</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Bienvenue sur la page d'accueil de la SOCIPRODD" />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="SOCIPRODD - Société Civile pour la Promotion des Droits et Devoirs" />
    <meta property="og:description" content="Bienvenue sur la page d'accueil de la SOCIPRODD" />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="SOCIPRODD - Société Civile pour la Promotion des Droits et Devoirs" />
    <meta name="twitter:creator" content="SOCIPRODD" />
    <meta name="twitter:url" content="https://www.sociprodd.org" />
    <meta name="twitter:description" content="Bienvenue sur la page d'accueil de la SOCIPRODD" />
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
    <link rel="canonical" href="https://sociprodd.org" />
    
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org" />

    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org" />

    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "breadcrumb": []
                },
                {
                    "@type": "WebSite",
                    "@id": "https://www.sociprodd.org/",
                    "name": "SOCIPRODD",
                    "url": "https://www.sociprodd.org/",
                    "publisher": {
                        "@type": "Organization",
                        "@id": "https://www.sociprodd.org/",
                        "name": "SOCIPRODD",
                        "url": "https://www.sociprodd.org/",
                        "sameAs": [
                            "https://www.facebook.com/",
                            "https://twitter.com/",
                            "https://www.instagram.com/",
                            "https://www.youtube.com/",
                            "https://www.linkedin.com/"
                        ],
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
    <link rel="stylesheet" href="/principale/public/assets/lib/animate/animate.min.css"/>
    <link href="/principale/public/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="/principale/public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="/principale/public/assets/css/mod1/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/principale/public/assets/css/mod1/style.css" rel="stylesheet">

@endsection



@section('content')

        @include('includes.topbar')

        <!-- Navbar & Hero Start -->
        <div class="position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-2 py-lg-0">
                <!-- Pour Ordinateur -->
                <!-- Bouton de Menu -->
                <div class="menu-toggle d-none d-lg-flex align-items-center gap-3 me-4">
                    <button id="menuToggle" class="bg-sociprodd-jaune text-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-jaune">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                        </svg>
                    </button>
                    <span class="text-menu">Menu</span>
                </div>

                <!-- Superposition sombre -->
                <div id="overlaywindow" class="overlaywindow"></div>

                <!-- Menu -->
                <div id="menu" class="menu-container">
                    <div class="menu-header">
                        <img src="/principale/public/assets/images/Logo-SOCIPRODD.png" alt="Logo SOCIPRODD" class="menu-logo">
                        <button id="menuClose" class="btn-close-window">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 10.5858L9.17157 7.75736L7.75736 9.17157L10.5858 12L7.75736 14.8284L9.17157 16.2426L12 13.4142L14.8284 16.2426L16.2426 14.8284L13.4142 12L16.2426 9.17157L14.8284 7.75736L12 10.5858Z"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="menu-body">
                        <strong>Nos réalisations</strong>
                        <strong>Nos actualités</strong>
                        <strong>Nos podcasts</strong>
                        <strong>Nos missions</strong>
                        <div class="menu-section">
                            <strong>Ce que nous faisons</strong>
                            <ul>
                                <li>. Projet A</li>
                                <li>. Projet B</li>
                                <li>. Projet C</li>
                            </ul>
                        </div>
                        <div class="menu-section">
                            <strong>Découvrir SOCIPRODD</strong>
                            <ul>
                                <li>. L'organisation</li>
                                <li>. Localisation</li>
                                <li>. Contactez-nous</li>
                                <li>. Bilan annuel 2023</li>
                            </ul>
                        </div>
                    </div>
                </div>



                <a href="https://sociprodd.org" class="bestP d-flex">
                    <img src="/principale/public/assets/images/Logo-SOCIPRODD.png" alt="Logo" width="79px" height="79px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <!-- Pour Ordinateur -->
                    <div class="navbar-nav ms-auto py-0">
                            
                        <a href="" class="d-none d-lg-block nav-item nav-link">Ce que nous faisons</a>
                        <a href="" class="d-none d-lg-block nav-item nav-link">Découvrir SOCIPRODD</a>
                        <a href="" class="d-none d-lg-block nav-item nav-link">Agir avec nous</a>
                        
                        <!-- Pour Ordinateur -->
                        <a href="https://pays.sociprodd.org" target="_blank" class="d-none d-lg-block nav-item nav-link" style="margin-left: 5em;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM16.0043 12.8777C15.6589 12.3533 15.4097 11.9746 14.4622 12.1248C12.6717 12.409 12.4732 12.7224 12.3877 13.2375L12.3636 13.3943L12.3393 13.5597C12.2416 14.2428 12.2453 14.5012 12.5589 14.8308C13.8241 16.1582 14.582 17.115 14.8116 17.6746C14.9237 17.9484 15.2119 18.7751 15.0136 19.5927C16.2372 19.1066 17.3156 18.3332 18.1653 17.3559C18.2755 16.9821 18.3551 16.5166 18.3551 15.9518V15.8472C18.3551 14.9247 18.3551 14.504 17.7031 14.1314C17.428 13.9751 17.2227 13.881 17.0582 13.8064C16.691 13.6394 16.4479 13.5297 16.1198 13.0499C16.0807 12.9928 16.0425 12.9358 16.0043 12.8777ZM12 3.83333C9.68259 3.83333 7.59062 4.79858 6.1042 6.34896C6.28116 6.47186 6.43537 6.64453 6.54129 6.88256C6.74529 7.34029 6.74529 7.8112 6.74529 8.22764C6.74488 8.55621 6.74442 8.8672 6.84992 9.09302C6.99443 9.40134 7.6164 9.53227 8.16548 9.64736C8.36166 9.68867 8.56395 9.73083 8.74797 9.78176C9.25405 9.92233 9.64554 10.3765 9.95938 10.7412C10.0896 10.8931 10.2819 11.1163 10.3783 11.1717C10.4286 11.1356 10.59 10.9608 10.6699 10.6735C10.7307 10.4547 10.7134 10.2597 10.6239 10.1543C10.0648 9.49445 10.0952 8.2232 10.268 7.75495C10.5402 7.01606 11.3905 7.07058 12.012 7.11097C12.2438 7.12589 12.4626 7.14023 12.6257 7.11976C13.2482 7.04166 13.4396 6.09538 13.575 5.91C13.8671 5.50981 14.7607 4.9071 15.3158 4.53454C14.3025 4.08382 13.1805 3.83333 12 3.83333Z"></path></svg>
                            Site mondial
                        </a>
                    </div>

                    <a href="#" class="d-none d-lg-block br-sociprodd-1 bg-sociprodd-jaune text-sociprodd-bleuefoncee py-2 px-4 my-3 my-lg-0 flex-shrink-0 d-none d-lg-block">Donner</a>
                
                    
                    <!-- Pour Téléphone -->
                    <div class="d-block d-lg-none">
                        <div class="navbar-nav ms-auto py-0">
                                
                            <div class="nav-item dropdown">
                                <span class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ce que nous faisons</span>
                                <div class="dropdown-menu m-0">
                                    <a href="" class="dropdown-item">Nos réalisations</a>
                                    <a href="" class="dropdown-item">Nos projets</a>
                                    <a href="" class="dropdown-item">Nos activités</a>
                                    <a href="" class="dropdown-item">Nos actualités</a>
                                    <a href="" class="dropdown-item">Nos missions</a>
                                </div>
                            </div>
                            
                            <div class="nav-item dropdown">
                                <span class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Découvrir SOCIPRODD</span>
                                <div class="dropdown-menu m-0">
                                    <a href="" class="dropdown-item">L'organisation</a>
                                    <a href="" class="dropdown-item">Localisation</a>
                                    <a href="" class="dropdown-item">Contactez-nous</a>
                                    <a href="" class="dropdown-item">Bilan annuel 2023</a>
                                </div>
                            </div>
                            <a href="" class="nav-item nav-link">Agir avec nous</a>
                        </div>
                    </div>
                        
                </div>
            </nav>

            <!-- Pour Téléphone -->
            <div class="d-block d-lg-none">
                <div class="d-flex justify-content-between align-items-center bg-sociprodd-bleueclaire py-2 px-3">

                    <a href="https://pays.sociprodd.org" target="_blank" class="text-sociprodd-blanc">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM16.0043 12.8777C15.6589 12.3533 15.4097 11.9746 14.4622 12.1248C12.6717 12.409 12.4732 12.7224 12.3877 13.2375L12.3636 13.3943L12.3393 13.5597C12.2416 14.2428 12.2453 14.5012 12.5589 14.8308C13.8241 16.1582 14.582 17.115 14.8116 17.6746C14.9237 17.9484 15.2119 18.7751 15.0136 19.5927C16.2372 19.1066 17.3156 18.3332 18.1653 17.3559C18.2755 16.9821 18.3551 16.5166 18.3551 15.9518V15.8472C18.3551 14.9247 18.3551 14.504 17.7031 14.1314C17.428 13.9751 17.2227 13.881 17.0582 13.8064C16.691 13.6394 16.4479 13.5297 16.1198 13.0499C16.0807 12.9928 16.0425 12.9358 16.0043 12.8777ZM12 3.83333C9.68259 3.83333 7.59062 4.79858 6.1042 6.34896C6.28116 6.47186 6.43537 6.64453 6.54129 6.88256C6.74529 7.34029 6.74529 7.8112 6.74529 8.22764C6.74488 8.55621 6.74442 8.8672 6.84992 9.09302C6.99443 9.40134 7.6164 9.53227 8.16548 9.64736C8.36166 9.68867 8.56395 9.73083 8.74797 9.78176C9.25405 9.92233 9.64554 10.3765 9.95938 10.7412C10.0896 10.8931 10.2819 11.1163 10.3783 11.1717C10.4286 11.1356 10.59 10.9608 10.6699 10.6735C10.7307 10.4547 10.7134 10.2597 10.6239 10.1543C10.0648 9.49445 10.0952 8.2232 10.268 7.75495C10.5402 7.01606 11.3905 7.07058 12.012 7.11097C12.2438 7.12589 12.4626 7.14023 12.6257 7.11976C13.2482 7.04166 13.4396 6.09538 13.575 5.91C13.8671 5.50981 14.7607 4.9071 15.3158 4.53454C14.3025 4.08382 13.1805 3.83333 12 3.83333Z"></path></svg>
                        Site mondial
                    </a>

                    <a href="#" class="br-sociprodd-1 bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3">Donner</a>
                </div>
            </div>

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="/principale/public/assets/images/Logo-SOCIPRODD.png" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row gy-0 gx-5">
                                <div class="col-lg-0 col-xl-5"></div>
                                <div class="col-xl-7 animated fadeInLeft br-sociprodd-2">
                                    <div class="text-sm-center text-md-end bg-sociprodd-bleuefoncee bdr-sociprodd-all-jaune img-border-radius p-4">
                                        <h4 class="text-sociprodd-jaune text-uppercase fw-bold mb-4 me-5">Bienvenue chez SOCIPRODD!</h4>
                                        <h1 class="display-4 text-uppercase text-white mb-4">Paix - Justice - Patrie</h1>
                                        <p class="mb-5 fs-5">
                                            Une organisation internationale, d’intérêt général, apolitique et non lucrative, œuvrant dans le secteur social et humanitaire et dont la mission fondamentale est la promotion de l’éducation juridique à l’ensemble des populations. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="/principale/public/assets/images/diverse-people-refugee-camps.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-12 animated fadeInUp">
                                    <div class="text-center">
                                        <p class="mb-2 fs-5">Les tensions sociopolitiques dans le monde ont emmené des millions de personnes à se déplacer vers d’autres horizons en quête de sécurité d’où l’avènement des « réfugiés » et « déplacés internes ».
                                            A côté de ces deux couches vulnérables, on a une autre catégorie de migrants appelés « retournés » et plus loin encore, d’autres migrants vulnérables/clandestins non encore identifiés.........
                                        </p>
                                        
                                        <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-5">
                                            <a class="br-sociprodd-1 bg-sociprodd-bleuefoncee text-sociprodd-blanc py-2 px-4 my-3 my-lg-0 flex-shrink-0" href="#">Lire plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->

        
        <!-- ODD Start -->
        <div class="odd-section pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-sociprodd-bleueclaire mb-4 d-inline-block p-2 title-border-radius" style="border-bottom: 3px solid #226CE0;">SOCIPRODD ET ODD</h4>
                    <p class="mb-0 text-sociprodd-bleuefoncee">La SOCIPRODD poursuit plusieurs Objectifs de Développement Durable à savoir :</p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="nav nav-pills bg-sociprodd-bleueclaire rounded p-3">
                            <a class="accordion-link p-2 active mb-2" data-bs-toggle="pill" href="#collapseOne">
                                <h5 class="mb-0">ODD N°1: De Lutte Contre La Pauvreté</h5>
                            </a>
                            <a class="accordion-link p-2 mb-2" data-bs-toggle="pill" href="#collapseTwo">
                                <h5 class="mb-0">ODD N°2: De Lutte Contre La Faim </h5>
                            </a>
                            <a class="accordion-link p-2 mb-2" data-bs-toggle="pill" href="#collapseThree">
                                <h5 class="mb-0">ODD N°3: De Bonne Santé Et Bien-Être</h5>
                            </a>
                            <a class="accordion-link p-2 mb-2" data-bs-toggle="pill" href="#collapseFour">
                                <h5 class="mb-0">ODD N°4: D’éducation De Qualité</h5>
                            </a>
                            <a class="accordion-link p-2 mb-2" data-bs-toggle="pill" href="#collapseFive">
                                <h5 class="mb-0">ODD N°5: De L’égalité Entre Les Sexes</h5>
                            </a>
                            <a class="accordion-link p-2 mb-2" data-bs-toggle="pill" href="#collapseHeight">
                                <h5 class="mb-0">ODD N°8: De Travail Décent Et Croissance Économique</h5>
                            </a>
                            <a class="accordion-link p-2 mb-2" data-bs-toggle="pill" href="#collapseTen">
                                <h5 class="mb-0">ODD N°10: De Réduction Des Inégalités</h5>
                            </a>
                            <a class="accordion-link p-2 mb-2" data-bs-toggle="pill" href="#collapseSixtee">
                                <h5 class="mb-0">ODD N°16: De Paix, Justice Et Institutions Efficaces</h5>
                            </a>
                            <a class="accordion-link p-2 mb-0" data-bs-toggle="pill" href="#collapseSeventee">
                                <h5 class="mb-0">ODD N°17: Partenariats Pour La Réalisation Des Objectifs</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="tab-content">
                            <div id="collapseOne" class="tab-pane fade show p-0 active">
                                <div class="col-md-10">
                                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius">
                                        <img src="/principale/public/assets/images/odd-pauvrete.png" class="img-fluid w-100 img-border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="tab-pane fade show p-0">
                                <div class="col-md-10">
                                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius">
                                        <img src="/principale/public/assets/images/odd-faim.png" class="img-fluid w-100 img-border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="tab-pane fade show p-0">
                                <div class="col-md-10">
                                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius">
                                        <img src="/principale/public/assets/images/odd-sante-etre.png" class="img-fluid w-100 img-border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFour" class="tab-pane fade show p-0">
                                <div class="col-md-10">
                                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius">
                                        <img src="/principale/public/assets/images/odd-education-qualite.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="collapseFive" class="tab-pane fade show p-0">
                                <div class="col-md-10">
                                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius">
                                        <img src="/principale/public/assets/images/odd-egalite-sexe.png" class="img-fluid w-100 img-border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="collapseHeight" class="tab-pane fade show p-0">
                                <div class="col-md-10">
                                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius">
                                        <img src="/principale/public/assets/images/odd-decent-croissance-eco.jpg" class="img-fluid w-100 img-border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTen" class="tab-pane fade show p-0">
                                <div class="col-md-10">
                                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius">
                                        <img src="/principale/public/assets/images/odd-egalite-reduite.png" class="img-fluid w-100 img-border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="collapseSixtee" class="tab-pane fade show p-0">
                                <div class="col-md-10">
                                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius">
                                        <img src="/principale/public/assets/images/odd-paix-justice-efficace.png" class="img-fluid w-100 img-border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="collapseSeventee" class="tab-pane fade show p-0">
                                <div class="col-md-10">
                                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius">
                                        <img src="/principale/public/assets/images/odd-partenariat.png" class="img-fluid w-100 img-border-radius" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ODD End -->

        
        <!-- COUNTERS -->
        <section class="text-light p-t-150 p-b-150 bg-sociprodd-bleuefoncee py-5">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter"> +<span data-speed="3000" data-refresh-interval="50" data-to="100000" data-from="600" data-seperator="true"></span></div>
                            <div class="seperator seperator-small"></div>
                            <p>Des Dons</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="93" data-from="100" data-seperator="true"></span>%</div>
                            <div class="seperator seperator-small"></div>
                            <p>Impacts</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter"> +<span data-speed="3000" data-refresh-interval="12" data-to="50" data-from="10" data-seperator="true"></span>mi</div>
                            <div class="seperator seperator-small"></div>
                            <p>Collecte de fonds</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="100" data-from="48" data-seperator="true"></span>%</div>
                            <div class="seperator seperator-small"></div>
                            <p>Transparence</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: COUNTERS -->
         
        

        <!-- About FONAREV Start -->
        <div class="py-5 about bg-light">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeIn" style="z-index: 10;" data-wow-delay="0.1s">
                        <div class="video bdr-sociprodd-all-bleueclaire img-border-radius">
                            <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/AqVNL2G4Ld4?si=GqURcx_N57hEvzgI" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                        <h4 class="text-sociprodd-bleueclaire mb-4 d-inline-block p-2 title-border-radius">FONAREPEV</h4>
                        <p class="text-dark mb-4">
                            Le relèvement des personnes nécessiteuses dans un conteste où les fonds d'aide humanitaire deviennent de plus en plus rares.
                            Redonner la joie de vivre aux réfugiés et autres couches sociales vulnérables est possible!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AqVNL2G4Ld4?si=GqURcx_N57hEvzgI" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About FONAREV End -->


        <!-- Modal Don -->
        <!-- div class="modal-overlay px-2" 
            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
                    background: rgba(0, 0, 0, 0.6); 
                    display: flex; 
                    align-items: center; 
                    justify-content: center; 
                    z-index: 1050;">
            <div class="modal-content-wrapper" 
                style="max-width: 700px; min-height: 380px; position: relative; border-radius: 10px;">
                < Image de fond >
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; 
                            background: url('/principale/public/assets/images/noel-2024.jpg') no-repeat center top; 
                            background-size: cover; 
                            z-index: -1; 
                            filter: brightness(0.5);
                            border-radius: 7px;">
                </div>
                < Contenu du Modal >
                <div class="modal-header text-light p-4 border-0">
                    <h2 class="modal-title text-sociprodd-blanc text-right">2025 <strong class="text-sociprodd-bleueclaire">Bientôt</strong></h2>
                    <button type="button" class="close text-light" onclick="closeModal()" aria-label="Close" style="font-size: 1.5rem; background: none; border: none;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-light p-4">
                    <h5 class="text-sociprodd-jaune">Partageons l'esprit de solidarité en cette fin d'année.</h5>
                    <p>
                        Ensemble, nous pouvons faire la différence ! 
                        Soutenez nos actions pour aider ceux qui en ont besoin. 
                        Votre générosité est une lumière dans l'obscurité.
                    </p>
                    <div class="d-flex justify-content-start mt-5">
                        <a href="#" class="ms-auto br-sociprodd-1 bg-sociprodd-bleueclaire text-sociprodd-blanc py-2 px-4 my-3 my-lg-0 flex-shrink-0 d-none d-lg-block">Faire un don</a>
                    </div>
                </div>
            </div>
        </div>
        < Modal Don -->


        
        <!-- Founder Start-->
        <div class="team py-5 d-none d-lg-block">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h4 class="text-sociprodd-bleueclaire mb-4 d-inline-block p-2 title-border-radius" style="border-bottom: 3px solid #226CE0;">Les fondateurs</h4>
                    <p class="mb-5 text-sociprodd-bleuefoncee">La SOCIPRODD est l’oeuvre d’une jeunesse passionnée du bien etre de l’humanité et du développement social.</p>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="team-item bdr-sociprodd-all-bleueclaire img-border-radius overflow-hidden">
                            <img src="/principale/public/assets/images/job-apieyie.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 text-sociprodd-blanc" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-sociprodd-bleueclaire">Job APIEYIE</h4>
                                <p class="text-muted mb-2">Fondateur-Cameroun</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                        <div class="team-item bdr-sociprodd-all-bleueclaire img-border-radius overflow-hidden">
                            <img src="/principale/public/assets/images/gabrielle-tommy.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 text-sociprodd-blanc" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-sociprodd-bleueclaire">Gabrielle TOMMY</h4>
                                <p class="text-muted mb-2">Co-fondatrice – Etats-Unis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                        <div class="team-item bdr-sociprodd-all-bleueclaire img-border-radius overflow-hidden">
                            <img src="/principale/public/assets/images/fraiche-tchamba.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 text-sociprodd-blanc" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-sociprodd-bleueclaire">Fraîchelie TCHAMBA</h4>
                                <p class="text-muted mb-2">Co-fondatrice – Cameroun</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                        <div class="team-item bdr-sociprodd-all-bleueclaire img-border-radius overflow-hidden">
                            <img src="/principale/public/assets/images/mathurin-tchantio.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon d-flex align-items-center justify-content-center">
                                <a class="share bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fas fa-share-alt"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 me-1 text-sociprodd-blanc" href=""><i class="fab fa-twitter"></i></a>
                                <a class="share-link bg-sociprodd-bleueclaire rounded-circle p-1 px-2 text-sociprodd-blanc" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-content text-center py-3">
                                <h4 class="text-sociprodd-bleueclaire">Mathurin TCHANTIO</h4>
                                <p class="text-muted mb-2">Co-Fondateur -Luxembourg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Founder End-->





@endsection



      
    <!-- JavaScript Libraries -->
@section('jsScripts')  


    <script src="/principale/public/assets/lib/wow/wow.min.js"></script>
    <script src="/principale/public/assets/lib/easing/easing.min.js"></script>
    <script src="/principale/public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/principale/public/assets/lib/counterup/counterup.min.js"></script>
    <script src="/principale/public/assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/principale/public/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    
        
    <!-- Script pour fermer le modal -->
    <script>
        function closeModal() {
            const modal = document.querySelector('.modal-overlay');
            modal.style.display = 'none'; // Masque le modal
        }

        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.querySelector('.modal-overlay');
            modal.style.display = 'flex'; // Affiche le modal au chargement de la page
        });

        const menu = document.getElementById("menu");
        const overlay = document.getElementById("overlaywindow");
        const menuToggle = document.getElementById("menuToggle");
        const menuClose = document.getElementById("menuClose");

        // Ouvrir le menu
        menuToggle.addEventListener("click", () => {
            menu.classList.add("active");
            overlay.classList.add("active");
        });

        // Fermer le menu
        menuClose.addEventListener("click", () => {
            menu.classList.remove("active");
            overlay.classList.remove("active");
        });

        // Fermer le menu en cliquant sur l'overlay
        overlay.addEventListener("click", () => {
            menu.classList.remove("active");
            overlay.classList.remove("active");
        });


    </script>

    

    <!-- Template Javascript -->
    <script src="/principale/public/assets/js/mod1/main.js"></script>

    <script src="/principale/public/assets/js/mod2/jquery.js"></script>
    <script src="/principale/public/assets/js/mod2/plugins.js"></script>
    <script src="/principale/public/assets/js/mod2/functions.js"></script>

     

@endsection