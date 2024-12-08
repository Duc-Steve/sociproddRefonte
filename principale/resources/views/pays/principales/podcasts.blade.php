@extends('layouts.appSite')



<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}} (Podcasts)</title>

    <!-- Description de la page pour les moteurs de recherche -->
    <meta name="description" content="Page des podcasts de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />

    <!-- Balises Open Graph pour Facebook et autres réseaux sociaux -->
    <meta property="og:title" content="SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}} (Podcasts)" />
    <meta property="og:description" content="Page des podcasts de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
    <meta property="og:image" content="/paysSystemeConfig/public/assets/images/Logo-SOCIPRODD.png" />
    <meta property="og:url" content="https://www.pays.sociprodd.org/{{$PaysDonnee->nom_url}}" />

    <!-- Balises Twitter Card pour Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="SOCIPRODD - {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
    <meta name="twitter:creator" content="SOCIPRODD" />
    <meta name="twitter:url" content="https://www.sociprodd.org" />
    <meta name="twitter:description" content="Page des podcasts de la SOCIPRODD {{Crypt::decrypt($PaysDonnee->nom_normale)}}" />
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
                <h1>Podcasts</h1>
                <div class="d-flex gap-2">
                    <a href="{{ route('acceuil', ['PaysUrl' => $PaysDonnee->nom_url]) }}">Acceuil</a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg>
                    <a href="{{ route('pays-podcasts', ['PaysUrl' => $PaysDonnee->nom_url]) }}">nos podcasts</a>
                    
                </div>
            </div>
        </div>
    </section>

       
    @if($NombrePodcastsActifs > 0)
        <!-- Podcasts -->
        <section id="page-content">
            <div id="NosPodcasts" class="container">
                <div class="row">

                @foreach($PodcastsActifs as $PodcastsActifsIndividu)
                    <div class="col-lg-4 mt-3">
                        <div class="br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-3">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $PodcastsActifsIndividu->id_element]) }}">
                                            <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($PodcastsActifsIndividu->lien_photos)}}">
                                        </a>    
                                        <span class="post-meta-category">Audio</span>
                                                
                                    </div>
                                    <div class="post-audio" style="position: relative;">
                                        <audio class="video-js vjs-default-skin" style="position: absolute; top: -1.5em; bottom: auto;" controls preload="false" data-setup="{}">
                                            @php
                                                $audioFileName = Crypt::decrypt($PodcastsActifsIndividu->nom_audio);
                                                $audioExtension = pathinfo($audioFileName, PATHINFO_EXTENSION);
                                            @endphp
                                            
                                            <source src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($PodcastsActifsIndividu->lien_audio) }}" type="audio/{{ $audioExtension }}" />
                                        </audio> 
                                    </div>
                                    <div class="post-item-description mt-4">
                                        <span class="post-meta-date">{{ $PodcastsActifsIndividu->created_at->format('Y-m-d')}}</span>
                                        <h2><strong style="margin-top: 1em">{{ Crypt::decrypt($PodcastsActifsIndividu->titre) }}</strong></a> </h2>
                                        <p>{{ Crypt::decrypt($PodcastsActifsIndividu->petite_description) }}</p>
                                        <a href="{{ route('information', ['PaysUrl' => $PaysDonnee->nom_url, 'IdElementSite' => $PodcastsActifsIndividu->id_element]) }}" class="item-link bg-sociprodd-jaune p-1 px-3"><strong class="text-sociprodd-bleuefoncee">Lire plus 
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z"></path></svg></strong></a>
                                    </div>    
                                </div>     
                            </div>   
                        </div>     
                    </div> 
                @endforeach
                   
                </div>
                <div class="pagination mt-4 d-flex justify-content-end">
                    {{ $PodcastsActifs->links() }}
                </div>

            </div>
        </section>
        <!-- end: Podcasts -->
    @else
    
        <!-- Podcasts -->
		<main class="d-flex w-100 mb-5">
			<div class="container d-flex flex-column">
				
				<div class="row vh-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">
			    
							<div class="text-center">
								<img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
							</div>
                            <h2>Il n'ya pas de podcasts pour vous ! </h2>
            	        </div>
					</div>
				</div>
            </div>
		</main>
        <!-- end: Podcasts -->
    
    @endif


















@endsection