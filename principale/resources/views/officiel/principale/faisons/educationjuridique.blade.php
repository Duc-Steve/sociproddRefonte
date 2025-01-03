@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Education juridique | SOCIPRODD </title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Découvrez nos ressources et initiatives pour mieux comprendre et promouvoir les droits et devoirs à travers l'éducation juridique." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Education juridique | SOCIPRODD " />
    <meta property="og:description" content="Découvrez nos ressources et initiatives pour mieux comprendre et promouvoir les droits et devoirs à travers l'éducation juridique." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/ce-que-nous-faisons/education-juridique" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Education juridique | SOCIPRODD " />
    <meta name="twitter:url" content="https://sociprodd.org/ce-que-nous-faisons/education-juridique" />
    <meta name="twitter:description" content="Découvrez nos ressources et initiatives pour mieux comprendre et promouvoir les droits et devoirs à travers l'éducation juridique." />
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
    <link rel="canonical" href="https://sociprodd.org/ce-que-nous-faisons/education-juridique" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/ce-que-nous-faisons/education-juridique" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/ce-que-nous-faisons/education-juridique" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/ce-que-nous-faisons/education-juridique" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/ce-que-nous-faisons/education-juridique",
                    "name": "Education juridique | SOCIPRODD",
                    "url": "https://www.sociprodd.org/ce-que-nous-faisons/education-juridique",
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
                                "name": "Education juridique",
                                "item": "https://www.sociprodd.org/ce-que-nous-faisons/education-juridique"
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

    <!-- Education Juridique -->
    <div class="fond-fixe-education-image">

        <div class="container-fluid py-5 mt-5 d-flex justify-content-start content">
            
            <div class="col-lg-5">

                <!-- Pour Ordinateur -->
                <div class="d-none d-lg-block p-4 pt-5">
                    <h1 class="text-sociprodd-jaune mb-3 pt-3">Promouvoir l'éducation juridique</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        L’adage « Nul n’est censé ignorer la loi » souligne l’importance pour chaque citoyen de connaître les règles qui régissent la société. Cependant, en Afrique, cette réalité demeure éloignée pour une grande partie de la population, en raison du manque d’accès à une éducation juridique de base. La SOCIPRODD se donne pour mission de combler cette lacune en vulgarisant les lois fondamentales nécessaires à l’épanouissement social et individuel.  
                        <br /><br />
                        À travers des initiatives adaptées, nous visons à sensibiliser, informer et former les citoyens sur leurs droits et devoirs, afin qu’ils puissent pleinement participer à la vie sociale, économique et politique. Cette démarche vise non seulement à renforcer leur autonomie, mais également à promouvoir une société plus juste, où chacun comprend les cadres juridiques qui protègent et encadrent son quotidien.
                        <br /><br />
                        Concrètement, la SOCIPRODD propose des ateliers, des séminaires et des programmes de formation accessibles à tous, quel que soit le niveau d’éducation. Ces initiatives couvrent des sujets variés, comme les droits fondamentaux, les procédures administratives essentielles, ou encore la gestion des conflits au quotidien. Nous utilisons également des supports numériques et interactifs pour atteindre un plus grand nombre de personnes, y compris dans les zones les plus reculées.
                        <br /><br />
                        En enseignant ces connaissances juridiques essentielles, nous aspirons à transformer chaque citoyen en acteur conscient et responsable de la société, capable de défendre ses droits et de respecter ceux des autres. Ensemble, nous construisons une communauté mieux informée, plus solidaire et engagée dans la promotion des droits et devoirs.
                    </p>
                </div>
                
                <!-- Pour Téléphone -->
                <div class="d-block d-lg-none pt-3">
                    <h1 class="text-sociprodd-jaune mb-3">Promouvoir l'éducation juridique</h1>
                    <p class="text-sociprodd-blanc p-clasique">
                        L’adage « Nul n’est censé ignorer la loi » souligne l’importance pour chaque citoyen de connaître les règles qui régissent la société. Cependant, en Afrique, cette réalité demeure éloignée pour une grande partie de la population, en raison du manque d’accès à une éducation juridique de base. La SOCIPRODD se donne pour mission de combler cette lacune en vulgarisant les lois fondamentales nécessaires à l’épanouissement social et individuel.  
                        <br /><br />
                        À travers des initiatives adaptées, nous visons à sensibiliser, informer et former les citoyens sur leurs droits et devoirs, afin qu’ils puissent pleinement participer à la vie sociale, économique et politique. Cette démarche vise non seulement à renforcer leur autonomie, mais également à promouvoir une société plus juste, où chacun comprend les cadres juridiques qui protègent et encadrent son quotidien.
                    </p>

                </div>


            </div>
            
        
        </div>


    </div>


    <div class="container-fluid bg-sociprodd-blanc d-flex justify-content-center align-items-center py-5">
        <div class="col-lg-8">


            <h3>Questions Générales <small>(4)</small></h3>
            <p class="text-sociprodd-bleuefoncee">Retrouvez ici des réponses aux questions fréquemment posées sur notre mission d'éducation juridique.</p>
            <div class="accordion toggle fancy radius clean mb-5">
                <div class="ac-item ac-active">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Pourquoi est-il important de connaître ses droits ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Connaître ses droits permet de mieux se protéger, de faire valoir ses intérêts et de participer activement à la société. Cela renforce également la justice sociale en aidant chacun à respecter les règles et les droits d’autrui.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Comment la SOCIPRODD aide-t-elle les citoyens à comprendre la loi ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Nous proposons des ateliers, des séminaires, des guides pratiques, et des supports numériques interactifs pour vulgariser les lois fondamentales. Notre objectif est de rendre ces connaissances accessibles à tous, même dans les zones rurales.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>Quelles sont les lois fondamentales enseignées ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Nous mettons l'accent sur les droits fondamentaux, comme les droits humains, les droits civils, et les lois relatives à la famille, au travail, et aux conflits de voisinage. Ces lois sont essentielles pour l’épanouissement personnel et collectif.
                    </div>
                </div>
                <div class="ac-item">
                    <h5 class="ac-title">
                        <i class="fa fa-question-circle"></i>La SOCIPRODD intervient-elle dans les écoles ? 
                        <span class="d-flex justify-content-end"><i class="fas fa-chevron-down"></i></span>
                    </h5>
                    <div class="ac-content">
                        Oui, nous collaborons avec des établissements scolaires et des universités pour intégrer l’éducation juridique dans les programmes scolaires. Nous organisons également des séances spéciales pour sensibiliser les jeunes à leurs droits et devoirs.
                    </div>
                </div>
            </div>

            
            <div class="row bg-sociprodd-bleueclaire br-sociprodd-1">
                <div class="col-lg-6 p-3">
                    <img src="/principale/public/assets/images/education-juridique-sociprodd-refugie.jpg" class="img-fluid bdr-sociprodd-all-jaune w-100 img-border-radius" alt="Image">
                    
                </div>
                <div class="col-lg-6 p-4">
                    <h2 class="text-sociprodd-jaune mb-3">Promouvoir l'éducation juridique</h2>
                    <p class="text-sociprodd-blanc">Alors qu’un adage affirme que « nul n’est censé ignorer la loi », nous constatons que la plupart des citoyens en Afrique ignorent toujours les lois fondamentales nécessaires pour leur épanouissement. C’est la raison pour laquelle, la SOCIPRODD entend enseigner les lois à l’ensemble des populations afin de donner un sens à cet adage et surtout permettre à tout un chacun de connaitre le minimum de lois nécessaire pour son épanouissement social.</p>
                </div>
            </div>
        </div>

    </div>

    @if($nombreActualiterEducationJuridique > 0)
        <div class="container-fluid bg-sociprodd-bleuefoncee d-flex justify-content-center align-items-center py-5">
            <div class="col-lg-8">
                    
                <h1 class="text-sociprodd-blanc mb-5">Page annexe</h1>

                <div class="row g-5 justify-content-center">
                        
                    @foreach($actualiterEducationJuridique->take(4) as $actualiter)
                        @if(Crypt::decrypt($actualiter->nom_mission) == "Promouvoir l'éducation juridique")
                            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="element-actualite-item rounded">
                                    <div class="element-actualite-img">
                                        <div class="overflow-hidden img-border-radius" style="height: 200px;">
                                            <img src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($actualiter->lien_photos)}}" class="w-100 h-100" alt="Image" style="object-fit: cover;">
                                        </div>

                                    </div>
                                    <div class="element-actualite-text bg-sociprodd-bleueclaire br-sociprodd-1 mt-3 px-4 pb-3">
                                        <div class="element-actualite-text-inner pt-3">
                                            <h4 class="text-sociprodd-blanc">
                                                {{ Str::limit(Crypt::decrypt($actualiter->titre), 50, '...') }}
                                            </h4>
                                            <p class="mt-3 mb-0 text-sociprodd-blanc">
                                                {{ Str::limit(Crypt::decrypt($actualiter->petite_description), 50, '...') }}
                                            </p>

                                        </div>
                                        <div class="text-end p-3 mt-4">
                                            <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                                    <path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path>
                                                </svg>
                                                Lire plus
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach



                </div>
            </div>

        </div>
    @endif
    <!-- Education Juridique -->


@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

    <script src="/principale/public/assets/js/clickquestionreponse.js"></script>

   
@endsection