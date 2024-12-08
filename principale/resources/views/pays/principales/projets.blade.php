@extends('layouts.appSite')



<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}} (Projets)</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Page des projets de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}} (Projets)" />
    <meta property="og:description" content="Page des projets de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
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
                <h1>Projets</h1>
                <div class="d-flex gap-2">
                    <a href="{{ route('acceuil', ['PaysUrl' => $PaysDonnee->nom_url]) }}">Acceuil</a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>
                    <a href="{{ route('pays-projets', ['PaysUrl' => $PaysDonnee->nom_url]) }}">nos projets</a>
                    
                </div>
            </div>
        </div>
    </section>


    <!-- Projets -->
    <section id="page-content">
        <div id="NosProjets" class="container">
            <div class="br-sociprodd-1 p-4 bdr-sociprodd-all-bleuefoncee">
                <div class="nav nav-tabs mb-1 gap-3" id="nav-tab" role="tablist">
                    <button class="nav-link fw-semi-bold active" id="nav-non-vue-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-non-vue" type="button" role="tab" aria-controls="nav-non-vue"
                        aria-selected="true">En cours</button>
                    <button class="nav-link fw-semi-bold" id="nav-atente-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-atente" type="button" role="tab" aria-controls="nav-atente"
                        aria-selected="false">En attente de financement</button>
                    <button class="nav-link fw-semi-bold" id="nav-vue-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-vue" type="button" role="tab" aria-controls="nav-vue"
                        aria-selected="false">Terminer</button>
                </div>
            </div>    
                 
            <div class="br-sociprodd-1 p-4 bdr-sociprodd-all-bleuefoncee mt-4"> 
                <div class="tab-content" id="nav-tabContent">
                    
                    <div class="tab-pane fade show active" id="nav-non-vue" role="tabpanel" aria-labelledby="nav-non-vue-tab">
                           
            
                        @if($NombreProjetsEnCoursActifs > 0) 
                    
                            <div class="row">           
                                @foreach($ProjetsEnCoursActifs as $ProjetsEnCoursActifsIndividu)
                                    <div class="col-lg-4 mt-3">
                                        <div class="br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-3">
                                            <!-- Post single item-->
                                            <div class="post-item">
                                                <div class="post-item-wrap">
                                                    <div class="post-image">
                                                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ProjetsEnCoursActifsIndividu->id_element]) }}">
                                                            <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ProjetsEnCoursActifsIndividu->lien_photos)}}">
                                                        </a>    
                                                             
                                                        <span class="post-meta-category">{{ $ProjetsEnCoursActifsIndividu->type_projet }}</span>   
                                                    </div>
                                                    <div class="post-item-description">
                                                        <span class="post-meta-date">{{ $ProjetsEnCoursActifsIndividu->created_at->format('Y-m-d') }}</span>
                                                        <h2><strong style="margin-top: 1em">{{ Crypt::decrypt($ProjetsEnCoursActifsIndividu->titre) }}</strong> </h2>
                                                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ProjetsEnCoursActifsIndividu->id_element]) }}" class="item-link bg-sociprodd-jaune p-1 px-3"><strong class="text-sociprodd-bleuefoncee">Lire plus 
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg></strong></a>
                                                    </div>    
                                                </div>     
                                            </div>   
                                        </div>     
                                    </div> 
                                @endforeach
                                   
                            </div> 
                            <!-- end: Projets -->
                        @else
                        
                            
    						<div class="text-center">
    							<img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
    						</div>
                            <h2>Il n'ya pas de projets pour vous ! </h2>
            	        
                        
                        @endif
                        
                    </div>
                    
                    <div class="tab-pane fade" id="nav-atente" role="tabpanel" aria-labelledby="nav-atente-tab"> 
                        
                        
                        @if($NombreProjetsEnAttenteActifs > 0) 
                    
                            <div class="row">           
                                @foreach($ProjetsEnAttenteActifs as $ProjetsEnAttenteActifsIndividu)
                                    <div class="col-lg-4 mt-3">
                                        <div class="br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-3">
                                            <!-- Post single item-->
                                            <div class="post-item">
                                                <div class="post-item-wrap">
                                                    <div class="post-image">
                                                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ProjetsEnAttenteActifsIndividu->id_element]) }}">
                                                            <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ProjetsEnAttenteActifsIndividu->lien_photos)}}">
                                                        </a>    
                                                           
                                                        <span class="post-meta-category">{{ $ProjetsEnAttenteActifsIndividu->type_projet }}</span>       
                                                    </div>
                                                    <div class="post-item-description">
                                                        <span class="post-meta-date">{{ $ProjetsEnAttenteActifsIndividu->created_at->format('Y-m-d') }}</span>
                                                        <h2><strong style="margin-top: 1em">{{ Crypt::decrypt($ProjetsEnAttenteActifsIndividu->titre) }}</strong> </h2>
                                                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ProjetsEnAttenteActifsIndividu->id_element]) }}" class="item-link bg-sociprodd-jaune p-1 px-3"><strong class="text-sociprodd-bleuefoncee">Lire plus 
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg></strong></a>
                                                    </div>    
                                                </div>     
                                            </div>   
                                        </div>     
                                    </div> 
                                @endforeach
                                   
                            </div> 
                            <!-- end: Projets -->
                        @else
                        
                            
    						<div class="text-center">
    							<img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
    						</div>
                            <h2>Il n'ya pas de projets pour vous ! </h2>
            	        
                        
                        @endif
                    
                    </div>
                    
                    <div class="tab-pane fade" id="nav-vue" role="tabpanel" aria-labelledby="nav-vue-tab">
                             
                        @if($NombreProjetsTerminerActifs > 0) 
                    
                            <div class="row">           
                                @foreach($ProjetsTerminerActifs as $ProjetsTerminerActifsIndividu)
                                    <div class="col-lg-4 mt-3">
                                        <div class="br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-3">
                                            <!-- Post single item-->
                                            <div class="post-item">
                                                <div class="post-item-wrap">
                                                    <div class="post-image">
                                                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ProjetsTerminerActifsIndividu->id_element]) }}">
                                                            <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ProjetsTerminerActifsIndividu->lien_photos)}}">
                                                        </a>   
                                                           
                                                        <span class="post-meta-category">{{ $ProjetsTerminerActifsIndividu->type_projet }}</span>    
                                                                
                                                    </div>
                                                    <div class="post-item-description">
                                                        <span class="post-meta-date">{{ $ProjetsTerminerActifsIndividu->created_at->format('Y-m-d') }}</span>
                                                        <span class="post-meta-comments">
                                                            <i class="fa fa-comments-o"></i>33 Comments
                                                            
                                                        </span>
                                                        <h2><strong style="margin-top: 1em">{{ Crypt::decrypt($ProjetsTerminerActifsIndividu->titre) }}</strong> </h2>
                                                        
                                                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $ProjetsTerminerActifsIndividu->id_element]) }}" class="item-link bg-sociprodd-jaune p-1 px-3"><strong class="text-sociprodd-bleuefoncee">Lire plus 
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg></strong></a>
                                                    </div>    
                                                </div>     
                                            </div>   
                                        </div>     
                                    </div> 
                                @endforeach
                                   
                            </div> 
                            <!-- end: Projets -->
                        @else
                        
       
    						<div class="text-center">
    							<img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
    						</div>
                            <h2>Il n'ya pas de projets pour vous ! </h2>
            	        
                            <!-- end: Projets -->
                        
                        @endif           
                    </div>
                    
                    
                </div>
            </div>          
           
        </div>
    </section>


















@endsection