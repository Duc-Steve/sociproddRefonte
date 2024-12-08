@extends('layouts.layoutsOfficiel.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Devenir membre | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Rejoignez SOCIPRODD et contribuez activement à un monde plus équitable." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Devenir membre | SOCIPRODD" />
    <meta property="og:description" content="Rejoignez SOCIPRODD et contribuez activement à un monde plus équitable." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/agir-avec-nous/devenir-membre" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Devenir membre | SOCIPRODD" />
    <meta name="twitter:url" content="https://www.sociprodd.org/agir-avec-nous/devenir-membre" />
    <meta name="twitter:description" content="Rejoignez SOCIPRODD et contribuez activement à un monde plus équitable." />
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
    <link rel="canonical" href="https://sociprodd.org/agir-avec-nous/devenir-membre" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/agir-avec-nous/devenir-membre" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/agir-avec-nous/devenir-membre" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/agir-avec-nous/devenir-membre" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://www.sociprodd.org/agir-avec-nous/devenir-membre",
                    "name": "Devenir membre | SOCIPRODD",
                    "url": "https://www.sociprodd.org/agir-avec-nous/devenir-membre",
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
                                "name": Devenir membre",
                                "item": "https://www.sociprodd.org/agir-avec-nous/devenir-membre"
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Devenir membres</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('agir-avec-nous.acceuil') }}">Agir avec nous</a></li>
                    <li class="breadcrumb-item text-sociprodd-blanc">Devenir membres</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    
    </div>
    <!-- Navbar & Hero End -->

    
    <!--Devenir membres SOCIPRODD -->
    <div class="container-fluid py-5 mt-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-8">
            <h1 class="text-sociprodd-bleuefoncee mt-5 mb-3">Devenir membres</h1>
            <p class="text-sociprodd-bleuefoncee p-clasique mb-5">
                La SOCIPRODD est une jeune organisation humanitaire Internationale. Elle ambitionne de s’étendre à travers l’Afrique avec ses divers programmes. Et pour y parvenir, elle a besoin des personnes capables de porter sa vision: celle de promouvoir l’éducation juridique à l’ensemble des peuples ; celle d’apporter un soutien effectif et durable aux personnes vulnérables.
                <br>
                Vous souhaitez vous engager dans une cause qui promeut les droits et les devoirs, tout en soutenant les personnes vulnérables ? Rejoignez la SOCIPRODD (Société Civile pour la Promotion des Droits et Devoirs) dès aujourd’hui en remplissant notre fiche d’adhésion. En devenant membre, vous contribuez à la promotion de l’éducation juridique, à la protection des droits et libertés, à l’égalité des genres, à la bonne gouvernance ainsi qu’à l’assistance sociale et humanitaire. Votre adhésion est une contribution précieuse à notre développement. Rejoignez-nous dès maintenant et faites partie du changement que nous voulons voir dans notre société. Aucun frais d’adhésion n’est remboursable, mais votre impact sera durable et significatif.
                <br>
                Pour télécharger la fiche : <a href="/principale/public/FICHE-DADHESION.pdf" class="text-sociprodd-bleueclaire" download="/principale/public/FICHE-DADHESION.pdf"> FICHE D'ADHESION </a>
            </p>
            

            <h3 class="text-sociprodd-bleueclaire text-center">La SOCIPRODD dispose en son sein de plusieurs catégories de membres</h3>
                
            
            <div class="row mt-5">
                <div class="col-lg-4 mb-3">
                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius p-3 d-flex flex-column gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"  fill="rgba(34,108,224,1)"><path d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM18 21.5L15.0611 23.0451L15.6224 19.7725L13.2447 17.4549L16.5305 16.9775L18 14L19.4695 16.9775L22.7553 17.4549L20.3776 19.7725L20.9389 23.0451L18 21.5ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>
                        <strong class="text-sociprodd-bleueclaire">Les membres fondateurs</strong>
                        <a href="#" class="text-sociprodd-bleuefoncee">Ce sont les personnes qui ont mis sur pied l’association. Ils disposent des pouvoirs plus étendus au sein de l’organisation.</a>
                        
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius p-3 d-flex flex-column gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"  fill="rgba(34,108,224,1)"><path d="M13 14.0619V22H4C4 17.5817 7.58172 14 12 14C12.3387 14 12.6724 14.021 13 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM17.7929 19.9142L21.3284 16.3787L22.7426 17.7929L17.7929 22.7426L14.2574 19.2071L15.6716 17.7929L17.7929 19.9142Z"></path></svg>
                        <strong class="text-sociprodd-bleueclaire">Les membres d’honneur</strong>
                        <a href="mailto:contact@sociprodd.org" class="text-sociprodd-bleuefoncee">Les membres d’honneur sont les personnes qui apportent leur soutien à l’organisation. Peut être membre d’honneur les parrains et marraines, les anciens présidents et les donateurs de l’organisation.</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius p-3 d-flex flex-column gap-2 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"  fill="rgba(34,108,224,1)"><path d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM14.5946 18.8115C14.5327 18.5511 14.5 18.2794 14.5 18C14.5 17.7207 14.5327 17.449 14.5945 17.1886L13.6029 16.6161L14.6029 14.884L15.5952 15.4569C15.9883 15.0851 16.4676 14.8034 17 14.6449V13.5H19V14.6449C19.5324 14.8034 20.0116 15.0851 20.4047 15.4569L21.3971 14.8839L22.3972 16.616L21.4055 17.1885C21.4673 17.449 21.5 17.7207 21.5 18C21.5 18.2793 21.4673 18.551 21.4055 18.8114L22.3972 19.3839L21.3972 21.116L20.4048 20.543C20.0117 20.9149 19.5325 21.1966 19.0001 21.355V22.5H17.0001V21.3551C16.4677 21.1967 15.9884 20.915 15.5953 20.5431L14.603 21.1161L13.6029 19.384L14.5946 18.8115ZM18 17C17.4477 17 17 17.4477 17 18C17 18.5523 17.4477 19 18 19C18.5523 19 19 18.5523 19 18C19 17.4477 18.5523 17 18 17Z"></path></svg>
                        <strong class="text-sociprodd-bleueclaire">Les membres exécutifs</strong>
                        <a href="tel:+237 694 53 98 93" class="text-sociprodd-bleuefoncee">Les membres exécutifs sont des personnes qui participent à l’élaboration des activités, du budget et la réalisation des activités.3</a>
                    </div>
                </div>
            </div>

            
            <div class="row mt-4">
                <div class="col-lg-4 mb-3">
                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius p-3 d-flex flex-column gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"  fill="rgba(34,108,224,1)"><path d="M17.841 15.659L18.017 15.836L18.1945 15.659C19.0732 14.7803 20.4978 14.7803 21.3765 15.659C22.2552 16.5377 22.2552 17.9623 21.3765 18.841L18.0178 22.1997L14.659 18.841C13.7803 17.9623 13.7803 16.5377 14.659 15.659C15.5377 14.7803 16.9623 14.7803 17.841 15.659ZM12 14V22H4C4 17.6651 7.44784 14.1355 11.7508 14.0038L12 14ZM12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1Z"></path></svg>
                        <strong class="text-sociprodd-bleueclaire">Les membres actifs</strong>
                        <a href="#" class="text-sociprodd-bleuefoncee">Les membres actifs sont des bénévoles qui participent à la réalisation des activités de l’organisation.</a>
                        
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="bdr-sociprodd-all-bleueclaire img-border-radius p-3 d-flex flex-column gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"  fill="rgba(34,108,224,1)"><path d="M14 14.252V22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM19 16.5858L21.1213 14.4645L22.5355 15.8787L20.4142 18L22.5355 20.1213L21.1213 21.5355L19 19.4142L16.8787 21.5355L15.4645 20.1213L17.5858 18L15.4645 15.8787L16.8787 14.4645L19 16.5858Z"></path></svg>
                        <strong class="text-sociprodd-bleueclaire">Les membres passifs</strong>
                        <a href="mailto:contact@sociprodd.org" class="text-sociprodd-bleuefoncee">Les membres passifs sont des personnes qui bénéficient des prestations offertes par l’organisation (conseils et accompagnement juridique etc.).</a>
                    </div>
                </div>
            </div>

            <p class="text-sociprodd-bleuefoncee mt-4 p-clasique">
                Nous sommes disponibles pour toute question. <strong>Contactez-nous dès maintenant !</strong>
            </p>
            <h3> <a href="{{ route('decouvrir-sociprodd.contacts') }}" class="bg-sociprodd-jaune br-sociprodd-1 text-sociprodd-bleuefoncee p-2 px-3">Contactez-nous !</a></h3>

        </div>
    </div>
    <!-- Devenir membres SOCIPRODD -->




@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

   
@endsection