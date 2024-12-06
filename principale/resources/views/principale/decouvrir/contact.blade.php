@extends('layouts.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Contactez-nous | SOCIPRODD</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Besoin de nous joindre rapidement ? Retrouvez toutes les informations pour nous contacter dès aujourd'hui." />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="Contactez-nous | SOCIPRODD" />
    <meta property="og:description" content="Besoin de nous joindre rapidement ? Retrouvez toutes les informations pour nous contacter dès aujourd'hui." />
    <meta property="og:image" content="/principale/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://sociprodd.org/decouvrir-sociprodd/contacts" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contactez-nous | SOCIPRODD" />
    <meta name="twitter:url" content="https://sociprodd.org/decouvrir-sociprodd/contacts" />
    <meta name="twitter:description" content="Besoin de nous joindre rapidement ? Retrouvez toutes les informations pour nous contacter dès aujourd'hui." />
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
    <link rel="canonical" href="https://sociprodd.org/decouvrir-sociprodd/contacts" />
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://sociprodd.org/decouvrir-sociprodd/contacts" />
    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://sociprodd.org/decouvrir-sociprodd/contacts" />
    <!-- Lien de révision -->
    <link rel="revision" href="https://sociprodd.org/decouvrir-sociprodd/contacts" />

    <!-- Script JSON-LD pour les données structurées -->
    <script type="application/ld+json">
        {JSON.stringify({
            "@context": "https://schema.org",
            "@graph": [
                {
                    "@type": "WebPage",
                    "@id": "https://sociprodd.org/decouvrir-sociprodd/contacts/decouvrir-sociprodd/contacts",
                    "name": "Contactez-nous | SOCIPRODD",
                    "url": "https://sociprodd.org/decouvrir-sociprodd/contacts/decouvrir-sociprodd/contacts",
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
                                "name": "Contactez-nous",
                                "item": "https://sociprodd.org/decouvrir-sociprodd/contacts/decouvrir-sociprodd/contacts"
                            }
                        ]
                    },
                    "publisher": {
                        "@type": "Organization",
                        "name": "SOCIPRODD",
                        "url": "https://sociprodd.org",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "https://sociprodd.org/decouvrir-sociprodd/contacts/principale/public/assets/images/Logo-SOCIPRODD.png"
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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contactez-nous</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Acceuil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('decouvrir-sociprodd.acceuil') }}">Découvrir SOCIPRODD</a></li>
                    <li class="breadcrumb-item text-sociprodd-blanc">Contacts</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    
    <!-- Contact Start -->
    <div class="contact py-5 mt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="bdr-sociprodd-all-bleueclaire br-sociprodd-1 p-3 d-flex flex-column gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"  fill="rgba(34,108,224,1)"><path d="M20 20C20 20.5523 19.5523 21 19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20ZM11 13V19H13V13H11Z"></path></svg>
                        <strong class="text-sociprodd-bleueclaire">Adresse</strong>
                        <a href="#" class="text-sociprodd-bleuefoncee">Sable Bonamoussadi, Douala</a>
                        
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="bdr-sociprodd-all-bleueclaire br-sociprodd-1 p-3 d-flex flex-column gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"  fill="rgba(34,108,224,1)"><path d="M2 5.5V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5ZM0 10H5V12H0V10ZM0 15H8V17H0V15Z"></path></svg>
                        <strong class="text-sociprodd-bleueclaire">E-mail</strong>
                        <a href="mailto:contact@sociprodd.org" class="text-sociprodd-bleuefoncee">contact@sociprodd.org</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="bdr-sociprodd-all-bleueclaire br-sociprodd-1 p-3 d-flex flex-column gap-2 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"  fill="rgba(34,108,224,1)"><path d="M21 16.42V19.9561C21 20.4811 20.5941 20.9167 20.0705 20.9537C19.6331 20.9846 19.2763 21 19 21C10.1634 21 3 13.8366 3 5C3 4.72371 3.01545 4.36687 3.04635 3.9295C3.08337 3.40588 3.51894 3 4.04386 3H7.5801C7.83678 3 8.05176 3.19442 8.07753 3.4498C8.10067 3.67907 8.12218 3.86314 8.14207 4.00202C8.34435 5.41472 8.75753 6.75936 9.3487 8.00303C9.44359 8.20265 9.38171 8.44159 9.20185 8.57006L7.04355 10.1118C8.35752 13.1811 10.8189 15.6425 13.8882 16.9565L15.4271 14.8019C15.5572 14.6199 15.799 14.5573 16.001 14.6532C17.2446 15.2439 18.5891 15.6566 20.0016 15.8584C20.1396 15.8782 20.3225 15.8995 20.5502 15.9225C20.8056 15.9483 21 16.1633 21 16.42Z"></path></svg>
                        <strong class="text-sociprodd-bleueclaire">Téléphone</strong>
                        <a href="tel:+237 694 53 98 93" class="text-sociprodd-bleuefoncee">(+237) 6 94 53 98 93</a>
                    </div>
                </div>
            </div>
            <div class="wow fadeInUp mt-4" data-wow-delay="0.2s">
                <div class="bg-light bdr-sociprodd-all-bleueclaire p-3 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
                    <h4 class="text-sociprodd-bleueclaire">Contactez-nous!</h4>
                    <p class="mb-4 text-sociprodd-bleuefoncee">Vous avez des questions ? Nous contacter !</p>
                    <form>
                        <div class="row">
                            <div class="col-lg-6 d-flex flex-column gap-3 mb-3">

                                <div class="form-floating">
                                    <input type="text" class="form-control bdr-sociprodd-all-bleueclaire br-sociprodd-1" id="name" placeholder="Your Name">
                                    <label for="name">Nom complet</label>
                                </div>
                                <div class="form-floating">
                                    <input type="email" class="form-control bdr-sociprodd-all-bleueclaire br-sociprodd-1" id="email" placeholder="Your Email">
                                    <label for="email">Email </label>
                                </div>
                                <div class="d-flex gap-2">
                                    <select class="form-control bdr-sociprodd-all-bleueclaire br-sociprodd-1" name="indicatif_pays" id="indicatif_pays" required>
                                        <option value="" selected>+xxx</option>
                                    </select>
                                    <input class="form-control bdr-sociprodd-all-bleueclaire br-sociprodd-1" id="phone" placeholder="Téléphone" required>
                                </div>
                                <div class="sujet">
                                    <select class="form-control bdr-sociprodd-all-bleueclaire br-sociprodd-1" name="" id="">
                                        <option value="" selected>Quel est votre option ?</option>
                                        <option value="">Travailler avec nous</option>
                                        <option value="">Devenir Membre</option>
                                        <option value="">Devenir Partenaire</option>
                                        <option value="">Simple prise de contact</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex flex-column gap-3 mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control bdr-sociprodd-all-bleueclaire br-sociprodd-1" placeholder="Leave a message here" id="message" style="height: 240px; resize: none; "></textarea>
                                    <label for="message">Message</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <button class="bg-sociprodd-bleuefoncee text-sociprodd-blanc p-2 w-100 bdr-sociprodd-all-bleuefoncee br-sociprodd-1">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection


<!-- JavaScript Libraries -->
@section('jsScripts')  

    @include('includes.js-animation')

    <!-- Inclure intl-tel-input JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

	<script>
		// Fonction pour générer les options du select
        function generateCountry() {
            
            // Sélectionnez l'élément select
            const selectUnNumber = document.getElementById('indicatif_pays');
            
            // Parcourez les données des pays
            for (let countryCode in window.intlTelInputGlobals.getCountryData()) {
                const countryData = window.intlTelInputGlobals.getCountryData()[countryCode];
                // Créez une option pour chaque pays avec son indicatif
                const option = document.createElement('option');
                option.value = "+" + countryData.dialCode;
                option.textContent = "(+" + countryData.dialCode + ") " + countryData.name;
                selectUnNumber.appendChild(option);
            }
        }

		
        // Appelez la fonction pour générer les options du numeros un une fois que le document est prêt
        document.addEventListener('DOMContentLoaded', generateCountry);
	</script>
    
@endsection