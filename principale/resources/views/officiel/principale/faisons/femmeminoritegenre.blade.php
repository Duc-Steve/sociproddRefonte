@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Femmes, Minorités et Genre | SOCIPRODD </title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Découvrez les initiatives de la SOCIPRODD pour promouvoir l'égalité, défendre les droits des femmes et des minorités." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Femmes, Minorités et Genre | SOCIPRODD " />
    <meta property="og:description" content="Découvrez les initiatives de la SOCIPRODD pour promouvoir l'égalité, défendre les droits des femmes et des minorités." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/ce-que-nous-faisons/femmes-minorites-genre" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Femmes, Minorités et Genre | SOCIPRODD " />
    <meta name="twitter:url" content="https://sociprodd.org/ce-que-nous-faisons/femmes-minorites-genre" />
    <meta name="twitter:description" content="Découvrez les initiatives de la SOCIPRODD pour promouvoir l'égalité, défendre les droits des femmes et des minorités." />
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
    <link rel="canonical" href="https://sociprodd.org/ce-que-nous-faisons/femmes-minorites-genre" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/ce-que-nous-faisons/femmes-minorites-genre" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/ce-que-nous-faisons/femmes-minorites-genre" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/ce-que-nous-faisons/femmes-minorites-genre" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/ce-que-nous-faisons/femmes-minorites-genre",
                    "name": "Femmes, Minorités et Genre | SOCIPRODD",
                    "url": "https://www.sociprodd.org/ce-que-nous-faisons/femmes-minorites-genre",
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
                                "name": "Femmes, Minorités et Genre",
                                "item": "https://www.sociprodd.org/ce-que-nous-faisons/femmes-minorites-genre"
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

    <!-- Femmes, Minorités et Genre -->
    <div class="fond-fixe-femmeminoritegenre-image">

        <div class="container-fluid py-5 mt-5 d-flex justify-content-start content">
            
            <div class="col-lg-5">

                <!-- Pour Ordinateur -->
                <div class="d-none d-lg-block p-4 pt-5">
                    <h1 class="text-sociprodd-jaune mb-3 pt-3">Promouvoir les droits des femmes, les droits des minorités et l’égalité de genre.</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        Historiquement souvent considérée comme le « sexe faible », la femme continue de faire face à de nombreuses discriminations sociales, économiques et culturelles. La SOCIPRODD s’engage activement à changer cette perception en menant des actions concrètes pour promouvoir les droits des femmes, renforcer leur autonomie, et encourager leur pleine participation dans tous les aspects de la société.  
                        <br><br>
                        En parallèle, nous soutenons les minorités souvent marginalisées ou stigmatisées, en veillant à ce que leurs droits soient respectés et leurs voix entendues. La SOCIPRODD milite également pour l’égalité de genre, en sensibilisant la société à l’importance d’éliminer les stéréotypes et en promouvant une culture de respect et d’inclusion.  
                        <br><br>
                        L’égalité de genre est au cœur de notre mission. Nous croyons fermement que l’équilibre entre les genres est essentiel pour une société prospère et équitable. Pour y parvenir, nous organisons des campagnes de sensibilisation, des ateliers éducatifs et des initiatives communautaires visant à déconstruire les stéréotypes sexistes et à promouvoir une culture basée sur le respect mutuel. Nous collaborons avec les institutions publiques et privées pour intégrer cette vision dans les politiques et pratiques locales.  
                        <br><br>
                        Enfin, la SOCIPRODD considère que chaque individu, quel que soit son genre ou son appartenance, a un rôle clé à jouer dans la construction d’un avenir équitable. Ensemble, nous pouvons bâtir une société où les droits de chacun sont respectés, où les différences sont célébrées, et où chaque personne a la possibilité de réaliser son plein potentiel.
                    </p>


                </div>
                
                <!-- Pour Téléphone -->
                <div class="d-block d-lg-none pt-3">
                    <h1 class="text-sociprodd-jaune mb-3">Promouvoir les droits des femmes, les droits des minorités et l’égalité de genre.</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        Historiquement souvent considérée comme le « sexe faible », la femme continue de faire face à de nombreuses discriminations sociales, économiques et culturelles. La SOCIPRODD s’engage activement à changer cette perception en menant des actions concrètes pour promouvoir les droits des femmes, renforcer leur autonomie, et encourager leur pleine participation dans tous les aspects de la société.  
                        <br><br>
                        En parallèle, nous soutenons les minorités souvent marginalisées ou stigmatisées, en veillant à ce que leurs droits soient respectés et leurs voix entendues. La SOCIPRODD milite également pour l’égalité de genre, en sensibilisant la société à l’importance d’éliminer les stéréotypes et en promouvant une culture de respect et d’inclusion.  
                        <br><br>
                        Grâce à nos programmes éducatifs, nos campagnes de plaidoyer et nos partenariats stratégiques, nous aspirons à bâtir une société où chaque individu, quel que soit son genre ou son appartenance, peut s’épanouir librement et dignement.
                    </p>


                </div>


            </div>
            
        
        </div>


    </div>


    <div class="container-fluid bg-sociprodd-blanc d-flex justify-content-center align-items-center py-5">
        <div class="col-lg-8">


            <h3>Questions Générales <small>(5)</small></h3>
            <p class="text-sociprodd-bleuefoncee">Retrouvez ici des réponses aux questions fréquemment posées sur notre mission de promouvoir les droits des femmes, des minorités et l'égalité de genre.</p>
            <div class="accordion toggle fancy radius clean mb-5">
                
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Comment la SOCIPRODD soutient-elle les minorités ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Nous menons des actions de plaidoyer pour des réformes inclusives, organisons des ateliers sur les droits fondamentaux, et offrons un accompagnement personnalisé pour aider les minorités à surmonter les défis liés aux discriminations et à l’exclusion sociale.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Quels sont les objectifs de la SOCIPRODD en matière d'égalité de genre ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Notre objectif est de favoriser un environnement où les genres sont traités de manière égale, que ce soit dans l'accès à l'éducation, aux opportunités économiques ou dans la participation aux processus décisionnels. Nous déconstruisons les stéréotypes sexistes à travers des campagnes et des initiatives éducatives.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Quels programmes sont proposés pour soutenir l'autonomie des femmes ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Nous offrons des formations professionnelles, des ateliers de leadership, et des outils éducatifs pour renforcer l’autonomie financière et sociale des femmes. Ces initiatives visent à les aider à devenir des actrices de changement dans leurs communautés.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Comment la SOCIPRODD collabore-t-elle avec d'autres acteurs pour atteindre ses objectifs ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Nous travaillons en partenariat avec des organisations locales, des institutions publiques et des entreprises privées pour maximiser l'impact de nos actions. Ces collaborations permettent de combiner ressources et expertises pour promouvoir les droits et l'égalité de manière plus efficace.
                    </div>
                </div>
            </div>

            
            <div class="row bg-sociprodd-bleueclaire br-sociprodd-1">
                <div class="col-lg-6 p-3">
                    <img src="/principale/public/assets/images/femmes-minorite-genre.jpg" class="img-fluid bdr-sociprodd-all-jaune w-100 img-border-radius" alt="Image">
                    
                </div>
                <div class="col-lg-6 p-4">
                    <h2 class="text-sociprodd-jaune mb-3">Promouvoir les droits des femmes, les droits des minorités et l’égalité de genre</h2>
                    <p class="text-sociprodd-blanc">La femme est considérée comme sexe faible et mérite d’être un peu plus soutenue dans la société raison pour laquelle la SOCIPRODD, mène des actions en faveur des femmes et de la promotion de leurs droits. La SOCIPRODD soutient également les couches minoritaires pour garantir le respect de leurs droits et milite pour l’égalité du genre.</p>
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
    <!-- Femmes, Minorités et Genre -->


@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

    <script src="/principale/public/assets/js/clickquestionreponse.js"></script>

   
@endsection