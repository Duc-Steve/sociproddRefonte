@extends('layouts.layoutsConfiguration.action')


@section('plugins_css')

    <style>
        .post-item .post-image, .post-item .post-slider, .post-item .post-video, .post-item .post-audio, .post-item .post-quote-img { margin: 0; position: relative; padding: 0; }

        .post-item .post-image .post-meta-category, .post-item .post-slider .post-meta-category, .post-item .post-video .post-meta-category, .post-item .post-audio .post-meta-category, .post-item .post-quote-img .post-meta-category { background-color: #2250fc; color: #fff; font-size: 13px; padding: 2px 16px; border-radius: 50px; position: absolute; right: 10px; top: 11px; z-index: 3; margin-right: 0; }

        .post-item .post-image .post-meta-category i, .post-item .post-slider .post-meta-category i, .post-item .post-video .post-meta-category i, .post-item .post-audio .post-meta-category i, .post-item .post-quote-img .post-meta-category i { margin-right: 4px; }

        .post-item .post-image .post-meta-category a, .post-item .post-slider .post-meta-category a, .post-item .post-video .post-meta-category a, .post-item .post-audio .post-meta-category a, .post-item .post-quote-img .post-meta-category a { color: #fff; }

        .post-image { margin-bottom: 20px; }

        .post-image img { width: 100%; }
    </style>


@endsection





@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            
            

                <div class="d-flex justify-content-end mb-4 gap-4">
                    <a href="{{route('nouveau-profile-executif', ['IdPays' => $PaysPris->id_pays ])}}" class="text-sociprodd-blanc br-sociprodd-1 bg-sociprodd-bleueclaire p-2 px-3">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path></svg> 
                        Nouveau profile de membres
                    </a>
                </div>
                

            @if($nombreSousMembreExecutifPays > 0)
                
                
                <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
                @include('includes.paysConfiguration.messageErrorSucces')
                
                <h1 class="mb-3">Nos membres</h1>
                <div class="row">
                    
                    @foreach($sousMembreExecutifPays as $sousMembreExecutifPaysIndividu)
                        
                        <div class="col-lg-4 mb-3">
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <img src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($sousMembreExecutifPaysIndividu->lien_photo)}}" alt="{{ Crypt::decrypt($sousMembreExecutifPaysIndividu->nom_prenom)}}">
                                        <span class="post-meta-category">{{ Crypt::decrypt($sousMembreExecutifPaysIndividu->nom_prenom)}}</span>
                                    </div>
                                    <div class="post-item-description bg-sociprodd-blanc p-4">
                                        <h3>{{ Crypt::decrypt($sousMembreExecutifPaysIndividu->poste)}}</h3>
                                        <p>{{ Crypt::decrypt($sousMembreExecutifPaysIndividu->petit_message)}}</p>
                                     </div>
                                </div>
                            </div> 
                        </div>

                    @endforeach
                    

                </div>

            @else
                <div class="d-flex justify-content-center">
                    
                    <h3>Cher utilisateur il n'existe pas de profile de membre enregistrer</h3>
                </div>
            @endif
        </div>
    </main>
       
@endsection



