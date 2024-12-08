@extends('layouts.layoutsOfficiel.app')


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
    
    @include('includes.css-animation')

    <!-- Template Stylesheet -->
    <link href="/principale/public/assets/css/mod1/style.css" rel="stylesheet">

@endsection



@section('content')

        @include('includes.principale.topbar')

        <!-- Navbar & Hero Start -->
        <div class="position-relative p-0">

        
            @include('includes.principale.headerbar')

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

    @include('includes.js-animation')
            
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
    </script>
    

    <!-- Template Javascript -->
    <script src="/principale/public/assets/js/mod1/main.js"></script>

    <script src="/principale/public/assets/js/mod2/jquery.js"></script>
    <script src="/principale/public/assets/js/mod2/plugins.js"></script>
    <script src="/principale/public/assets/js/mod2/functions.js"></script>

     

@endsection