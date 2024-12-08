@extends('layouts.appSite')



<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}} ({{ Crypt::decrypt($ElementPaysRecuperer->titre) }})</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Information d'un contenu de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}} ({{ Crypt::decrypt($ElementPaysRecuperer->titre) }})" />
    <meta property="og:description" content="Information d'un contenu de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
    <meta property="og:image" content="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
    <meta name="twitter:creator" content="SOCIPRODD" />
    <meta name="twitter:url" content="https://www.sociprodd.org" />
    <meta name="twitter:description" content="Page des projets de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
    <meta name="twitter:image" content="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
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
    <link rel="apple-touch-icon" sizes="180x180" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <link rel="manifest" href="/manifest.json" />
    <link rel="mask-icon" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" color="#050A2E" />
    <link rel="shortcut icon" href="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    
    <link href="/paysSystemeConfig/public/systeme/css/sociproddBootstrap.css" rel="stylesheet">

    <!-- Balises supplémentaires pour le SEO -->
    <!-- Lien canonique pour éviter le contenu dupliqué -->
    <link rel="canonical" href="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />
    
    <!-- Définir la langue du contenu -->
    <meta http-equiv="content-language" content="fr" />
    
    <!-- Directives pour les robots des moteurs de recherche -->
    <meta name="robots" content="index, follow" />
    
    <!-- Lien court pour l'URL de la page -->
    <link rel="shortlink" href="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />

    <!-- Lien alternatif pour d'autres langues et versions -->
    <link rel="alternate" hreflang="fr" href="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />

    <!-- Lien de révision -->
    <link rel="revision" href="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />

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
                            "url": "https://www.sociprodd.org/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png"
                        }
                    }
                }
            ]
        })}
    </script>

                

@endsection










<!-- contenu de page -->
@section('content')



    <section id="page-content">
        <div class="container">
            <!-- post content -->
            <!-- Page title -->
            <div class="page-title">
                <h1>{{ Crypt::decrypt($ElementPaysRecuperer->titre) }}</h1>
                <div class="d-flex gap-2">
                    <a href="{{ route('acceuil', ['PaysUrl' => $PaysDonnee->nom_url]) }}">Acceuil</a>
                    
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>
                    
                    @if($ElementPaysRecuperer->type_element == "actualite")
                        <a href="{{ route('pays-actualites', ['PaysUrl' => $PaysDonnee->nom_url]) }}">Actualites</a>
                        
                    @elseif($ElementPaysRecuperer->type_element == "reportage")
                        <a href="{{ route('pays-reportages', ['PaysUrl' => $PaysDonnee->nom_url]) }}">Reportages</a>
                    
                    @elseif($ElementPaysRecuperer->type_element == "projet")
                        <a href="{{ route('pays-projets', ['PaysUrl' => $PaysDonnee->nom_url]) }}">Projets</a>
                    
                    @elseif($ElementPaysRecuperer->type_element == "podcast")
                        <a href="{{ route('pays-podcasts', ['PaysUrl' => $PaysDonnee->nom_url]) }}">Podcasts</a>
        
                    @endif
                    
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>
                    <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ElementPaysRecuperer->id_element]) }}">{{ Crypt::decrypt($ElementPaysRecuperer->reference_unique) }}</a>
                    
                </div>
            </div>
        </div>
    </section>



    <!-- Page Content -->
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <!-- content -->
                
                @if(Crypt::decrypt($FonctionaliteAcces->commentaire) == "true")
                    <div class="content col-lg-8">
                @else
                    <div class="content col-lg-12">
                @endif
                
                        <!-- Blog -->
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    
                                    @if($ElementPaysRecuperer->type_element == "actualite")
                                         <div class="post-image">
                                            <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ElementPaysRecuperer->id_element]) }}">
                                                <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ElementPaysRecuperer->lien_photos)}}">
                                            </a>
                                            <span class="post-meta-category">Actualite</span>
                                        </div>
                                        
                                    @elseif($ElementPaysRecuperer->type_element == "reportage")
                                        <div class="post-video">
                                            <iframe class="br-sociprodd-1" width="560" height="315" src="{{Crypt::decrypt($ElementPaysRecuperer->lien_video)}}" title="{{ Crypt::decrypt($ElementPaysRecuperer->titre) }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                    
                                    @elseif($ElementPaysRecuperer->type_element == "projet")
                                        <div class="post-image mb-3">
                                            <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ElementPaysRecuperer->id_element]) }}">
                                                <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ElementPaysRecuperer->lien_photos)}}">
                                            </a>
                                            <span class="post-meta-category">{{ $ContenuElement->type_projet }}</span>
                                        </div>
                                    
                                    @elseif($ElementPaysRecuperer->type_element == "podcast")
                                        <div class="post-audio mb-3">
                                            <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ElementPaysRecuperer->id_element]) }}">
                                                <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ElementPaysRecuperer->lien_photos)}}">
                                            </a>
                                            <span class="post-meta-category">Podcast</span>
                                        </div>
                        
                                    @endif
                                                
                                    <div class="post-item-description">
                                        <h2>{{ Crypt::decrypt($ElementPaysRecuperer->titre) }}</h2>
                                        
                                        <span class="post-meta-date">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M7 1V3H3C2.44772 3 2 3.44772 2 4V20C2 20.5523 2.44772 21 3 21H10.7546C9.65672 19.6304 9 17.8919 9 16C9 11.5817 12.5817 8 17 8C18.8919 8 20.6304 8.65672 22 9.75463V4C22 3.44772 21.5523 3 21 3H17V1H15V3H9V1H7ZM23 16C23 19.3137 20.3137 22 17 22C13.6863 22 11 19.3137 11 16C11 12.6863 13.6863 10 17 10C20.3137 10 23 12.6863 23 16ZM16 12V16.4142L18.2929 18.7071L19.7071 17.2929L18 15.5858V12H16Z"></path></svg>
                                            {{ $ElementPaysRecuperer->created_at->format('Y-m-d')}}
                                        </span>
                                        
                                        <span class="post-meta-comments ms-4">
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M2 8.99374C2 5.68349 4.67654 3 8.00066 3H15.9993C19.3134 3 22 5.69478 22 8.99374V21H8.00066C4.68659 21 2 18.3052 2 15.0063V8.99374ZM14 11V13H16V11H14ZM8 11V13H10V11H8Z"></path></svg>
                                                
                                            @if($NombreCommentaire == 0)
                                                {{ $NombreCommentaire }} Commentaire
                                            @else
                                                {{ $NombreCommentaire }} Commentaires
                                            @endif
                                        </span>
                                        
                                        @if($ElementPaysRecuperer->type_element == "actualite")
                                            <span class="post-meta-category">Actualites</span>
                                            
                                        @elseif($ElementPaysRecuperer->type_element == "reportage")
                                            <span class="post-meta-category">Reportages</span>
                                        
                                        @elseif($ElementPaysRecuperer->type_element == "projet")
                                            <span class="post-meta-category">Projets</span>
                                        
                                        @elseif($ElementPaysRecuperer->type_element == "podcast")
                                            <span class="post-meta-category">Podcasts</span>
                            
                                        @endif
                                        <p>{{ Crypt::decrypt($ElementPaysRecuperer->petite_description)}}</p>
                                    </div>
                                    
                                    @if($ElementPaysRecuperer->type_element == "actualite")
                                        <div class="row">
                                            
                                            @if(Crypt::decrypt($ElementPaysRecuperer->lien_video) != null )
                                                <div class="post-item border col-lg-6 mt-3">
                                                    <div class="post-item-wrap">
                                                        
                                                        <div class="post-video">
                                                            <iframe class="br-sociprodd-1" width="560" height="315" src="{{Crypt::decrypt($ElementPaysRecuperer->lien_video)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            @endif
                                            
                                            
                                            @foreach($ContenuElement as $ContenuElementIndividu)
                                                <div class="post-item border col-lg-6 mt-3">
                                                    <div class="post-item-wrap">
                                                                        
                                                         <div class="post-image">
                                                            <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ContenuElementIndividu->lien_photos)}}">
                                                        </div>
                                                        <div class="post-item-description p-4">
                                                            <div class="post-meta">
                                                                <span class="text-sociprodd-bleuefoncee text-center">{{$ContenuElementIndividu->created_at}}</span>
                                                                <p class="mt-3">{{Crypt::decrypt($ContenuElementIndividu->description)}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            
                                        </div>
                                    
                                    @elseif($ElementPaysRecuperer->type_element == "reportage")
                                        <div class="row">
            
                                            @foreach($ContenuElement as $ContenuElementIndividu)
                                                <div class="post-item border col-lg-6 mt-3">
                                                    <div class="post-item-wrap">
                                                        
                                                        <div class="post-video">
                                                            <iframe class="br-sociprodd-1" width="560" height="315" src="{{Crypt::decrypt($ContenuElementIndividu->lien_video)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                        </div>
                                                        
                                                        <div class="post-item-description p-4">
                                                            <div class="post-meta">
                                                                <span class="text-sociprodd-bleuefoncee text-center">{{$ContenuElementIndividu->created_at}}</span>
                                                                <p class="mt-3">{{Crypt::decrypt($ContenuElementIndividu->description)}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    @elseif($ElementPaysRecuperer->type_element == "podcast")
                                    
                                        <div class="row">
                                            @foreach($ContenuElement as $ContenuElementIndividu)
                                                <div class="post-item border col-lg-6 mt-3">
                                                    <div class="post-item-wrap">
                                                        <div class="post-audio p-3">
                                                            <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
                                                                @php
                                                                    $audioFileName = Crypt::decrypt($ContenuElementIndividu->nom_audio);
                                                                    $audioExtension = pathinfo($audioFileName, PATHINFO_EXTENSION);
                                                                @endphp
                                                                
                                                                <source src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($ContenuElementIndividu->lien_audio) }}" type="audio/{{ $audioExtension }}" />
                                                            </audio>
                                                        </div>
                                                        <div class="post-item-description p-4">
                                                            <div class="post-meta">
                                                                <span class="text-sociprodd-bleuefoncee text-center">{{$ContenuElementIndividu->created_at}}</span>
                                                                <p class="mt-3">{{Crypt::decrypt($ContenuElementIndividu->description)}}</p>
                                                            </div>
                                                        </div>
                                                            
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                    @elseif($ElementPaysRecuperer->type_element == "projet")
                                    
                                        <p>{{Crypt::decrypt($ContenuElement->description)}}</p>
                                    
                                        @if(Crypt::decrypt($ContenuElement->lien_pdf) != null)
                                            <button onclick="TelechargerFichier()" class="d-flex gap-2 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc p-1 pt-2 px-3 br-sociprodd-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)">
                                                    <path d="M13 13V18.585L14.8284 16.7574L16.2426 18.1716L12 22.4142L7.75736 18.1716L9.17157 16.7574L11 18.585V13H13ZM12 2C15.5934 2 18.5544 4.70761 18.9541 8.19395C21.2858 8.83154 23 10.9656 23 13.5C23 16.3688 20.8036 18.7246 18.0006 18.9776L18 17C18 13.6863 15.3137 11 12 11C8.7616 11 6.12243 13.5656 6.00414 16.7751L6 17L6.00039 18.9776C3.19696 18.7252 1 16.3692 1 13.5C1 10.9656 2.71424 8.83154 5.04648 8.19411C5.44561 4.70761 8.40661 2 12 2Z"></path>
                                                </svg>
                                                <h3 class="text-sociprodd-blanc">Rapport</h3>  
                                            </a>
                                        @endif
                                    
                                    @endif
                                        
                                    
                                    
                                </div>
                            </div>
                            <!-- end: Post single item-->
                        </div>
                        
                        
                    </div>
                <!-- end: content -->
                
                @if(Crypt::decrypt($FonctionaliteAcces->commentaire) == "true")
                    <!-- Sidebar-->
                    <div class="sticky-sidebar col-lg-4">
                        
                        @if($NombreCommentaire > 0)
                            <h3>Les derniers commentaires</h3>
                            <div class="d-flex flex-column gap-2">
                                @foreach($TroisDernierCommentaireElement as $TroisDernierCommentaireElementIndividu)
                                    <div class="post-thumbnail-entry bdr-sociprodd-all-bleuefoncee br-sociprodd-1 p-2">
                                        <img alt="" src="images/blog/thumbnail/5.jpg">
                                        <div class="post-thumbnail-content">
                                            <a href="#"><p>{{ Crypt::decrypt($TroisDernierCommentaireElementIndividu->description) }}</p></a>
                                            <span class="post-date">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M7 1V3H3C2.44772 3 2 3.44772 2 4V20C2 20.5523 2.44772 21 3 21H10.7546C9.65672 19.6304 9 17.8919 9 16C9 11.5817 12.5817 8 17 8C18.8919 8 20.6304 8.65672 22 9.75463V4C22 3.44772 21.5523 3 21 3H17V1H15V3H9V1H7ZM23 16C23 19.3137 20.3137 22 17 22C13.6863 22 11 19.3137 11 16C11 12.6863 13.6863 10 17 10C20.3137 10 23 12.6863 23 16ZM16 12V16.4142L18.2929 18.7071L19.7071 17.2929L18 15.5858V12H16Z"></path></svg>
                                                {{ $TroisDernierCommentaireElementIndividu->created_at->format('Y-m-d')}}
                                            </span>
                                            <span class="post-category"> {{ Crypt::decrypt($TroisDernierCommentaireElementIndividu->nom_prenom) }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        
                        
                        <div class="respond-form " id="respond">
                            <div class="bg-sociprodd-blanc bdr-sociprodd-all-bleuefoncee br-sociprodd-1 p-4">
                                <div class="respond-comment">
                                    Commentaires</div>
                                <div class="form-gray-fields">
                                    <div class="form-group">
                                        <label for="name">Nom et Prénom</label>
                                        <input type="text" id="nom_prenom" class="form-control name bdr-sociprodd-all-bleuefoncee" placeholder="Entrer votre nom et prénom" maxlength="49" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Adresse Email</label>
                                        <input type="email" id="adresse_mail" class="form-control email bdr-sociprodd-all-bleuefoncee" placeholder="Entrer votre adresse mail" maxlength="250" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea type="text" id="description" rows="5" class="form-control bdr-sociprodd-all-bleuefoncee" placeholder="Entrer votre message" style="resize:none;"  maxlength="500" required></textarea>
                                    </div>
                                    <button class="btn btn-primary mt-4" type="button" onclick="enregistrerCommentaire()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M1.94619 9.31543C1.42365 9.14125 1.41953 8.86022 1.95694 8.68108L21.0431 2.31901C21.5716 2.14285 21.8747 2.43866 21.7266 2.95694L16.2734 22.0432C16.1224 22.5716 15.8178 22.59 15.5945 22.0876L12 14L18 6.00005L10 12L1.94619 9.31543Z"></path></svg>
                                        Publier </button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                @endif
                
            </div>
        </div>
    </section>
    <!-- end: Page Content -->






@endsection







<!-- contenu jsScript -->
@section('jsScript')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
    
         @if($ElementPaysRecuperer->type_element == "projet" && Crypt::decrypt($ContenuElement->lien_pdf) != null)
    
            
            function TelechargerFichier() {
                
                // Afficher SweetAlert
                Swal.fire({
                    html: `
                        <div style="text-align: center;">
                            <img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" class="img-fluid" width="132" height="132">
                            <h2>Téléchargement en cours. </h2>
                        </div>`,
                    text: 'Succès!',
                    timer: 3000, // Optionnel : délai d'affichage de l'alerte en millisecondes
                    timerProgressBar: true,
                    showConfirmButton: false
                }).then((result) => {
                    // Rediriger vers la route de téléchargement côté client
                    window.location.href = "{{ route('Telechargement', ['Telechargerfichier' => $ContenuElement->lien_pdf]) }}";
                });
            }
    
        @endif
    
        function enregistrerCommentaire() {
            // Récupérer les valeurs des champs d'entrée
            var nomPrenom = document.getElementById("nom_prenom").value;
            var emailContact = document.getElementById("adresse_mail").value;
            var messageContact = document.getElementById("description").value;
        
            // Validation des champs
            if (!nomPrenom || nomPrenom.length > 50) {
                afficherErreur("Le nom et prénom est requis et doit contenir au maximum 50 caractères.");
                return;
            }
        
            if (!emailContact || !validateEmail(emailContact)) {
                afficherErreur("L'adresse e-mail est invalide.");
                return;
            }
        
            if (!messageContact || messageContact.length > 500) {
                afficherErreur("Le commentaire est requis et doit contenir au maximum 500 caractères.");
                return;
            }
        
            // Remplacer ces variables par les valeurs appropriées
            var PaysUrl = "{{$PaysDonnee->nom_url}}";  // Dynamique selon le pays
            var IdElementSite = "{{$ElementPaysRecuperer->id_element}}";  // Dynamique selon l'élément du site
        
            // URL de l'API pour les demandes de contacts (inclut les paramètres dynamiques)
            const apiUrl = `https://pays.sociprodd.org/api/v1/${PaysUrl}/${IdElementSite}/information`;
        
            const CommentaireData = {
                'nomPrenom': nomPrenom,
                'email': emailContact,
                'commentaire': messageContact
            };
        
            fetch(apiUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(CommentaireData) // Convertit les données en chaîne JSON
            })
            .then(response => response.json())
            .then(data => {
                // Traiter la réponse JSON
                if (data.code === 200) {
                    // Afficher un message en cas de succès
                    afficherErreur(data.message);
                    // Réinitialiser les champs
                    reinitialiserChamps();
                    // Rafraîchir la page
                    window.location.reload();
                } else {
                    // Gérer d'autres codes de réponse si nécessaire
                    afficherErreur("Une erreur est survenue: " + data.message);
                }
            })
            .catch(error => {
                // Traiter les erreurs de la réponse ou autres exceptions
                if (typeof error === 'object' && error !== null && 'error' in error) {
                    afficherErreur(error.error);
                } else {
                    alert(error.message);
                }
            });
        }

        function reinitialiserChamps() {
            // Réinitialiser les valeurs des champs d'entrée à vide
            document.getElementById("nom_prenom").value = "";
            document.getElementById("adresse_mail").value = "";
            document.getElementById("description").value = "";
        }
        
        // Fonction de validation d'email
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }

    </script>



    <script>
        
        function afficherErreur(message) {
            return new Promise((resolve, reject) => {
                Swal.fire({
                    html: `
                        <div style="text-align: center;">
                            <img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" class="img-fluid" width="132" height="132">
                            <h2 style="color: #073066;">${message}</h2>
                        </div>`,
                    background: 'ff914d',
                    timer: '3000',
                    timerProgressBar: true,
                    showConfirmButton: false
                }).then(() => {
                    resolve(); // Résout la promesse une fois que l'alerte est fermée
                });
            });
        }

    </script>



@endsection