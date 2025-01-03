@extends('layouts.layoutsConfiguration.sansAside')





@section('plugins_css')

    <!-- Stylesheets & Fonts -->
    <link href="/paysSystemeConfig/public/assets/css/plugins.css" rel="stylesheet">
    <link href="/paysSystemeConfig/public/assets/css/style.css" rel="stylesheet">
    
@endsection



@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <div class="d-flex justify-content-start mb-5">
    
                <a href="{{route('contenu-elements', ['IdPays' => $PaysPris->id_pays])}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                    <svg xmlns="http://www.w3.org/2000/svg" TypewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                    retour
                </a>
            </div> 
            
            
            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('includes.paysConfiguration.messageErrorSucces')

            <!-- Page Content -->
            <div class="row mt-4">


                @if($ElementPaysRecuperer->type_element == "reportage")
                    <!-- content -->
                    <div class="col-lg-8">

                        <div class="d-flex flex-column">
                                
                            <!-- Blog -->
                            <div id="blog" class="single-post">
                                <!-- Post single item-->
                                <div class="post-item">
                                    <div class="post-item-wrap">
                                        <div class="post-video">
                                            <iframe class="br-sociprodd-1" width="560" height="315" src="{{Crypt::decrypt($ElementPaysRecuperer->lien_video)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                        </div>
                                        <div class="post-item-description p-4">
                                            <h2>{{Crypt::decrypt($ElementPaysRecuperer->titre)}}</h2>
                                            <div class="post-meta">
                                                <span class="post-meta-date">{{$ElementPaysRecuperer->created_at}}</span>
                                                <span class="post-meta-comments">
                                                    @if($NombreCommentaire == 0)
                                                        {{ $NombreCommentaire }} Commentaire
                                                    @else
                                                        <a href="">{{ $NombreCommentaire }} Commentaires</a>
                                                    @endif
                                                </span>
                                                
                                            </div>
                                            <p>{{Crypt::decrypt($ElementPaysRecuperer->petite_description)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: Post single item-->
                            </div>

                            <div class="row">

                                @foreach($ContenuElement as $ContenuElementIndividu)
                                    <div class="post-item border col-lg-6">
                                        <div class="post-item-wrap" style="position: relative;">
                                            <div style="position: absolute; top: 7em; right: -1em; left: auto; z-index: 1000;">
                                                <button type="button" class="bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-1 br-sociprodd-1" 
                                                    data-bs-toggle="modal" data-bs-target="#editReportage{{$ContenuElementIndividu->id_reportage}}">
                                                    
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M16.6256 3.1285L9.29145 10.4626L9.29886 14.7098L13.537 14.7024L20.8682 7.37114C21.5912 8.75438 22 10.3278 22 11.9967C22 17.5196 17.5228 21.9967 12 21.9967C6.47715 21.9967 2 17.5196 2 11.9967C2 6.47386 6.47715 1.9967 12 1.9967C13.6689 1.9967 15.2423 2.40553 16.6256 3.1285ZM20.4853 2.09721L21.8995 3.51142L12.7071 12.7038L11.2954 12.7063L11.2929 11.2896L20.4853 2.09721Z"></path></svg>
                                                </button>
                                                
                                            </div>
                                            <div class="modal fade bg-sociprodd-bleuefoncee" id="editReportage{{$ContenuElementIndividu->id_reportage}}" data-bs-backdrop="static" data-bs-keyboard="false">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content overflow-hidden bg-sociprodd-blanc">
                                                        <div class="modal-body">    
                                                            <div class="position-relative">
                                                                <div class="position-absolute end-0 p-4">
                                                                    <button class="close btn-close bg-sociprodd-bleueclaire text-sociprodd-bleuefoncee bdr-sociprodd-all-bleueclaire" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                                        <span class="uil uil-times" aria-hidden="true"></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                                    
                                                            <div class="mt-5 p-3">
                                                                <form action="{{ route('detail-element-autre.reportage-update', ['IdPays' => $PaysPris->id_pays, 'IdElement' => $ElementPaysRecuperer->id_element, 'IdReportage' => $ContenuElementIndividu->id_reportage]) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf  

                                                                    <h3>Modifier le reportage</h3>
                                                                    
                                                                    <div class="mb-3">
                                                                        <label class="d-flex text-sociprodd-bleuefoncee">Description<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                                                        <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 200px;">{{Crypt::decrypt($ContenuElementIndividu->description)}}</textarea>
                                                                        
                                                                    </div>
                                                                                                        
                                                                    <div class="mb-3">
                                                                        <label class="d-flex text-sociprodd-bleuefoncee">Statut du reportage<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                                                        <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="statut_reportage" id="statut_reportage" required>

                                                                            @if($ContenuElementIndividu->statut_reportage == "publier")
                                                                                <option value="{{ $ContenuElementIndividu->statut_reportage }}" selected>{{ $ContenuElementIndividu->statut_reportage }}</option>
                                                                                <option value="supprimer">Supprimer</option>
                                                                                <option value="en attente">En attente</option>
                                                                            @elseif($ContenuElementIndividu->statut_reportage == "en attente")
                                                                                <option value="{{ $ContenuElementIndividu->statut_reportage }}" selected>{{ $ContenuElementIndividu->statut_reportage }}</option>
                                                                                <option value="publier">Publier</option>
                                                                                <option value="supprimer">Supprimer</option>
                                                                            @elseif($ContenuElementIndividu->statut_reportage == "supprimer")
                                                                                <option value="{{ $ContenuElementIndividu->statut_reportage }}" selected>{{ $ContenuElementIndividu->statut_reportage }}</option>
                                                                                <option value="publier">Publier</option>
                                                                                <option value="en attente">En attente</option>
                                                                            @endif
                                                                            
                                                                        </select>
                                                                    </div>

                                                                    <div class="d-flex justify-content-end mt-4">
                                                                        <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i>Modifier le reportage!</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-video">
                                                <iframe class="br-sociprodd-1" width="560" height="315" src="{{Crypt::decrypt($ContenuElementIndividu->lien_video)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            </div>
                                            
                                            <div class="post-item-description p-4">
                                                <div class="post-meta bdr-sociprodd-bleuefoncee-b">
                                                    <div class="mb-3">
                                                        <span class="text-sociprodd-bleuefoncee text-center">{{$ContenuElementIndividu->created_at}}</span>
                                                        
                                                        
                                                        @if($ContenuElementIndividu->statut_reportage == "en attente")
                                                            <span class="text-center bg-sociprodd-bleueclaire br-sociprodd-1 text-sociprodd-blanc p-2">
                                                                En attente
                                                            </span>
                                                        @elseif($ContenuElementIndividu->statut_reportage == "publier")
                                                            <span class="text-center bg-sociprodd-vert br-sociprodd-1 text-sociprodd-blanc p-2">
                                                                Publier
                                                            </span>
                                                        @elseif($ContenuElementIndividu->statut_reportage == "supprimer")
                                                            <span class="text-center bg-sociprodd-rouge br-sociprodd-1 text-sociprodd-blanc p-2">
                                                                Supprimer
                                                            </span>
                                                        @endif

                                                        
                                                    </div>
                                                    <p class="mt-3">{{Crypt::decrypt($ContenuElementIndividu->description)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- end: content -->
                @elseif($ElementPaysRecuperer->type_element == "podcast")

                
                    
                    <div class="col-lg-8">
                        <div class="d-flex flex-column">
                            
                            <!-- Blog -->
                            <div id="blog" class="single-post">
                                <!-- Post single item-->
                                <div class="post-item">
                                    <div class="post-item-wrap">
                                                
                                        <div class="post-audio mb-3">
                                            <a href="#">
                                                <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ElementPaysRecuperer->lien_photos)}}">
                                            </a>
                                        </div>
                                        <div class="post-item-description p-4">
                                            <h2>{{Crypt::decrypt($ElementPaysRecuperer->titre)}}</h2>
                                            <div class="post-meta">
                                                <span class="post-meta-date">{{$ElementPaysRecuperer->created_at}}</span>
                                                <span class="post-meta-comments">
                                                    @if($NombreCommentaire == 0)
                                                        {{ $NombreCommentaire }} Commentaire
                                                    @else
                                                        <a href="">{{ $NombreCommentaire }} Commentaires</a>
                                                    @endif
                                                </span>
                                                
                                            </div>
                                            <p>{{Crypt::decrypt($ElementPaysRecuperer->petite_description)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: Post single item-->
                            </div>

                            <div class="row">
                                @foreach($ContenuElement as $ContenuElementIndividu)
                                    <div class="post-item border col-lg-6">
                                        <div class="post-item-wrap" style="position: relative;">
                                            <div style="position: absolute; top: 7em; right: -1em; left: auto;">
                                                <button type="button" class="bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc p-1 br-sociprodd-1" 
                                                    data-bs-toggle="modal" data-bs-target="#editPodcast{{$ContenuElementIndividu->id_podcast}}">
                                                    
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M16.6256 3.1285L9.29145 10.4626L9.29886 14.7098L13.537 14.7024L20.8682 7.37114C21.5912 8.75438 22 10.3278 22 11.9967C22 17.5196 17.5228 21.9967 12 21.9967C6.47715 21.9967 2 17.5196 2 11.9967C2 6.47386 6.47715 1.9967 12 1.9967C13.6689 1.9967 15.2423 2.40553 16.6256 3.1285ZM20.4853 2.09721L21.8995 3.51142L12.7071 12.7038L11.2954 12.7063L11.2929 11.2896L20.4853 2.09721Z"></path></svg>
                                                </button>
                                            </div>
                                                
                                            <div class="modal fade bg-sociprodd-bleuefoncee" id="editPodcast{{$ContenuElementIndividu->id_podcast}}" data-bs-backdrop="static" data-bs-keyboard="false">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content overflow-hidden bg-sociprodd-blanc">
                                                        <div class="modal-body">    
                                                            <div class="position-relative">
                                                                <div class="position-absolute end-0 p-4">
                                                                    <button class="close btn-close bg-sociprodd-bleueclaire text-sociprodd-bleuefoncee bdr-sociprodd-all-bleueclaire" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                                        <span class="uil uil-times" aria-hidden="true"></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                                    
                                                            <div class="mt-5 p-3">
                                                                <form action="{{ route('detail-element-autre.podcast-update', ['IdPays' => $PaysPris->id_pays, 'IdElement' => $ElementPaysRecuperer->id_element, 'IdPodcast' => $ContenuElementIndividu->id_podcast]) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf  

                                                                    <h3>Modifier le podcast</h3>
                                                                    
                                                                    <div class="mb-3">
                                                                        <label class="d-flex text-sociprodd-bleuefoncee">Description<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                                                        <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 200px;">{{Crypt::decrypt($ContenuElementIndividu->description)}}</textarea>
                                                                        
                                                                    </div>
                                                                                                        
                                                                    <div class="mb-3">
                                                                        <label class="d-flex text-sociprodd-bleuefoncee">Statut du podcast<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                                                        <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="statut_podcast" id="statut_podcast" required>

                                                                            @if($ContenuElementIndividu->statut_podcast == "publier")
                                                                                <option value="{{ $ContenuElementIndividu->statut_podcast }}" selected>{{ $ContenuElementIndividu->statut_podcast }}</option>
                                                                                <option value="supprimer">Supprimer</option>
                                                                                <option value="en attente">En attente</option>
                                                                            @elseif($ContenuElementIndividu->statut_podcast == "en attente")
                                                                                <option value="{{ $ContenuElementIndividu->statut_podcast }}" selected>{{ $ContenuElementIndividu->statut_podcast }}</option>
                                                                                <option value="publier">Publier</option>
                                                                                <option value="supprimer">Supprimer</option>
                                                                            @elseif($ContenuElementIndividu->statut_podcast == "supprimer")
                                                                                <option value="{{ $ContenuElementIndividu->statut_podcast }}" selected>{{ $ContenuElementIndividu->statut_podcast }}</option>
                                                                                <option value="publier">Publier</option>
                                                                                <option value="en attente">En attente</option>
                                                                            @endif
                                                                            
                                                                        </select>
                                                                    </div>

                                                                    <div class="d-flex justify-content-end mt-4">
                                                                        <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i>Modifier le podcast!</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <div class="post-meta bdr-sociprodd-bleuefoncee-b">
                                                    <div class="mb-3">
                                                        <span class="text-sociprodd-bleuefoncee text-center">{{$ContenuElementIndividu->created_at}}</span>
                                                        
                                                        @if($ContenuElementIndividu->statut_podcast == "en attente")
                                                            <span class="text-center bg-sociprodd-bleueclaire br-sociprodd-1 text-sociprodd-blanc p-2">
                                                                En attente
                                                            </span>
                                                        @elseif($ContenuElementIndividu->statut_podcast == "publier")
                                                            <span class="text-center bg-sociprodd-vert br-sociprodd-1 text-sociprodd-blanc p-2">
                                                                Publier
                                                            </span>
                                                        @elseif($ContenuElementIndividu->statut_podcast == "supprimer")
                                                            <span class="text-center bg-sociprodd-rouge br-sociprodd-1 text-sociprodd-blanc p-2">
                                                                Supprimer
                                                            </span>
                                                        @endif

                                                    </div>
                                                    
                                                    <p class="mt-3">{{Crypt::decrypt($ContenuElementIndividu->description)}}</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                @elseif($ElementPaysRecuperer->type_element == "actualite")

                
                                    
                    <div class="col-lg-8">
                        <div class="d-flex flex-column">
                            
                            <!-- Blog -->
                            <div id="blog" class="single-post">
                                <!-- Post single item-->
                                <div class="post-item">
                                    <div class="post-item-wrap">
                                        
                                        @if(Crypt::decrypt($ElementPaysRecuperer->lien_video) != null )
                                            <div class="post-video">
                                                <iframe class="br-sociprodd-1" width="560" height="215" src="{{Crypt::decrypt($ElementPaysRecuperer->lien_video)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            </div>
                                        @endif
                                        
                                        <div class="post-image">
                                            <a href="#">
                                                <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ElementPaysRecuperer->lien_photos)}}">
                                            </a>
                                            <span class="post-meta-category">Actualite {{Crypt::decrypt($ElementPaysRecuperer->reference_unique)}}</span>
                                        </div>
                                        
                                        
                                        <div class="post-item-description p-4">
                                            <span class="post-meta-date">{{$ElementPaysRecuperer->created_at}}</span>
                                            <span class="post-meta-comments">
                                                @if($NombreCommentaire == 0)
                                                    {{ $NombreCommentaire }} Commentaire
                                                @else
                                                    <a href="">{{ $NombreCommentaire }} Commentaires</a>
                                                @endif
                                            </span>
                                            <h2>{{Crypt::decrypt($ElementPaysRecuperer->titre)}}</h2>
                                            <p>{{Crypt::decrypt($ElementPaysRecuperer->petite_description)}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end: Post single item-->
                            </div>

                            <div class="row">
                                @foreach($ContenuElement as $ContenuElementIndividu)
                                    <div class="post-item border col-lg-6">
                                        <div class="post-item-wrap" style="position: relative;">
                                            <div style="position: absolute; top: 7em; right: -1em; left: auto; z-index: 1000;">
                                                <button type="button" class="bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-1 br-sociprodd-1" 
                                                    data-bs-toggle="modal" data-bs-target="#editActualite{{$ContenuElementIndividu->id_actualite}}">
                                                    
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M16.6256 3.1285L9.29145 10.4626L9.29886 14.7098L13.537 14.7024L20.8682 7.37114C21.5912 8.75438 22 10.3278 22 11.9967C22 17.5196 17.5228 21.9967 12 21.9967C6.47715 21.9967 2 17.5196 2 11.9967C2 6.47386 6.47715 1.9967 12 1.9967C13.6689 1.9967 15.2423 2.40553 16.6256 3.1285ZM20.4853 2.09721L21.8995 3.51142L12.7071 12.7038L11.2954 12.7063L11.2929 11.2896L20.4853 2.09721Z"></path></svg>
                                                </button>
                                            </div>
                                                
                                            <div class="modal fade bg-sociprodd-bleuefoncee" id="editActualite{{$ContenuElementIndividu->id_actualite}}" data-bs-backdrop="static" data-bs-keyboard="false">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content overflow-hidden bg-sociprodd-blanc">
                                                        <div class="modal-body">    
                                                            <div class="position-relative">
                                                                <div class="position-absolute end-0 p-4">
                                                                    <button class="close btn-close bg-sociprodd-bleueclaire text-sociprodd-bleuefoncee bdr-sociprodd-all-bleueclaire" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                                        <span class="uil uil-times" aria-hidden="true"></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                                    
                                                            <div class="mt-5 p-3">
                                                                <form action="{{ route('detail-element-autre.actualite-update', ['IdPays' => $PaysPris->id_pays, 'IdElement' => $ElementPaysRecuperer->id_element, 'IdActualite' => $ContenuElementIndividu->id_actualite]) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf  

                                                                    <h3>Modifier l'actualite</h3>
                                                                    
                                                                    <div class="mb-3">
                                                                        <label class="d-flex text-sociprodd-bleuefoncee">Description<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                                                        <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 200px;">{{Crypt::decrypt($ContenuElementIndividu->description)}}</textarea>
                                                                        
                                                                    </div>
                                                                                                        
                                                                    <div class="mb-3">
                                                                        <label class="d-flex text-sociprodd-bleuefoncee">Statut du actualite<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                                                        <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="statut_actualite" id="statut_actualite" required>

                                                                            @if($ContenuElementIndividu->statut_actualite == "publier")
                                                                                <option value="{{ $ContenuElementIndividu->statut_actualite }}" selected>{{ $ContenuElementIndividu->statut_actualite }}</option>
                                                                                <option value="supprimer">Supprimer</option>
                                                                                <option value="en attente">En attente</option>
                                                                            @elseif($ContenuElementIndividu->statut_actualite == "en attente")
                                                                                <option value="{{ $ContenuElementIndividu->statut_actualite }}" selected>{{ $ContenuElementIndividu->statut_actualite }}</option>
                                                                                <option value="publier">Publier</option>
                                                                                <option value="supprimer">Supprimer</option>
                                                                            @elseif($ContenuElementIndividu->statut_actualite == "supprimer")
                                                                                <option value="{{ $ContenuElementIndividu->statut_actualite }}" selected>{{ $ContenuElementIndividu->statut_actualite }}</option>
                                                                                <option value="publier">Publier</option>
                                                                                <option value="en attente">En attente</option>
                                                                            @endif
                                                                            
                                                                        </select>
                                                                    </div>

                                                                    <div class="d-flex justify-content-end mt-4">
                                                                        <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i>Modifier l'actualite!</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @if(Crypt::decrypt($ElementPaysRecuperer->lien_photos) != "null")
                                                <div class="post-image">
                                                    <a href="#">
                                                        <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ElementPaysRecuperer->lien_photos)}}">
                                                    </a>
                                                    <span class="post-meta-category">Suite</span>
                                                </div>
                                            @endif

                                            <div class="post-item-description p-4">
                                                <div class="post-meta bdr-sociprodd-bleuefoncee-b">
                                                    <div class="mb-3">
                                                        <span class="text-sociprodd-bleuefoncee text-center">{{$ContenuElementIndividu->created_at}}</span>
                                                        
                                                        @if($ContenuElementIndividu->statut_actualite == "en attente")
                                                            <span class="text-center bg-sociprodd-bleueclaire br-sociprodd-1 text-sociprodd-blanc p-2">
                                                                En attente
                                                            </span>
                                                        @elseif($ContenuElementIndividu->statut_actualite == "publier")
                                                            <span class="text-center bg-sociprodd-vert br-sociprodd-1 text-sociprodd-blanc p-2">
                                                                Publier
                                                            </span>
                                                        @elseif($ContenuElementIndividu->statut_actualite == "supprimer")
                                                            <span class="text-center bg-sociprodd-rouge br-sociprodd-1 text-sociprodd-blanc p-2">
                                                                Supprimer
                                                            </span>
                                                        @endif

                                                    </div>
                                                    
                                                    <p class="mt-3">{{Crypt::decrypt($ContenuElementIndividu->description)}}</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                @elseif($ElementPaysRecuperer->type_element == "projet")

                                
                                                        
                    <div class="col-lg-6">
                        <div class="d-flex flex-column">
                            
                            <h1>Projet {{ $ContenuElement->type_projet }}</h1>
                            <!-- Blog -->
                            <div id="blog" class="single-post">
                                <!-- Post single item-->
                                <div class="post-item">
                                    <div class="post-item-wrap">
                                        <div class="post-image">
                                            <a href="#">
                                                <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{Crypt::decrypt($ElementPaysRecuperer->lien_photos)}}">
                                            </a>
                                            <span class="post-meta-category"><a href="">Projet {{Crypt::decrypt($ElementPaysRecuperer->reference_unique)}}</a></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- end: Post single item-->
                            </div>

                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        
                        <div class="d-flex justify-content-end gap-3 mb-3">

                            @if(Crypt::decrypt($ContenuElement->lien_pdf) != null)
                                <button onclick="TelechargerFichier()" class="d-flex gap-2 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc p-1 pt-2 px-3 br-sociprodd-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)">
                                        <path d="M13 13V18.585L14.8284 16.7574L16.2426 18.1716L12 22.4142L7.75736 18.1716L9.17157 16.7574L11 18.585V13H13ZM12 2C15.5934 2 18.5544 4.70761 18.9541 8.19395C21.2858 8.83154 23 10.9656 23 13.5C23 16.3688 20.8036 18.7246 18.0006 18.9776L18 17C18 13.6863 15.3137 11 12 11C8.7616 11 6.12243 13.5656 6.00414 16.7751L6 17L6.00039 18.9776C3.19696 18.7252 1 16.3692 1 13.5C1 10.9656 2.71424 8.83154 5.04648 8.19411C5.44561 4.70761 8.40661 2 12 2Z"></path>
                                    </svg>
                                    <h3 class="text-sociprodd-blanc">Rapport</h3>  
                                </a>
                            @endif

                            <button type="button" class="d-flex gap-2 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-1 pt-2 px-3 br-sociprodd-1" 
                                data-bs-toggle="modal" data-bs-target="#editProjet{{$ContenuElement->id_projet}}">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M16.6256 3.1285L9.29145 10.4626L9.29886 14.7098L13.537 14.7024L20.8682 7.37114C21.5912 8.75438 22 10.3278 22 11.9967C22 17.5196 17.5228 21.9967 12 21.9967C6.47715 21.9967 2 17.5196 2 11.9967C2 6.47386 6.47715 1.9967 12 1.9967C13.6689 1.9967 15.2423 2.40553 16.6256 3.1285ZM20.4853 2.09721L21.8995 3.51142L12.7071 12.7038L11.2954 12.7063L11.2929 11.2896L20.4853 2.09721Z"></path></svg>
                                <h3 class="text-sociprodd-blanc"> Mise à jours </h3>
                            </button>
                        </div>
                            
                        <div class="modal fade bg-sociprodd-bleuefoncee" id="editProjet{{$ContenuElement->id_projet}}" data-bs-backdrop="static" data-bs-keyboard="false">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content overflow-hidden bg-sociprodd-blanc">
                                    <div class="modal-body">    
                                        <div class="position-relative">
                                            <div class="position-absolute end-0 p-4">
                                                <button class="close btn-close bg-sociprodd-bleueclaire text-sociprodd-bleuefoncee bdr-sociprodd-all-bleueclaire" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                    <span class="uil uil-times" aria-hidden="true"></span>
                                                </button>
                                            </div>
                                        </div>
                                                
                                        <div class="mt-5 p-3">
                                            <form action="{{ route('detail-element-autre.projet-update', ['IdPays' => $PaysPris->id_pays, 'IdElement' => $ElementPaysRecuperer->id_element]) }}" method="POST" enctype="multipart/form-data">
                                                @csrf  

                                                <h3>Modifier le projet</h3>
                                                
                                                <div class="mt-3 mb-3">
                                                    <label class="d-flex text-sociprodd-bleuefoncee"> Rapport du projet  <strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="pdf_rapport" id="pdf_rapport" accept=".pdf">
                                                    @error('pdf_rapport')
                                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <label class="d-flex text-sociprodd-bleuefoncee">Description<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                                    <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 200px;">{{Crypt::decrypt($ContenuElement->description)}}</textarea>
                                                    
                                                </div>
                                                            
                                                <div class="mb-3">
                                                    <label class="d-flex text-sociprodd-bleuefoncee">Statut du projet<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                                    <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="statut_projet" id="statut_projet" required>

                                                        @if($ContenuElement->statut_projet == "en cours")
                                                            <option value="{{ $ContenuElement->statut_projet }}" selected>{{ $ContenuElement->statut_projet }}</option>
                                                            <option value="terminer">Terminer</option>
                                                            <option value="en attente de financement">En attente de financement</option>
                                                        @elseif($ContenuElement->statut_projet == "en attente de financement")
                                                            <option value="{{ $ContenuElement->statut_projet }}" selected>{{ $ContenuElement->statut_projet }}</option>
                                                            <option value="en cours">En cours</option>
                                                            <option value="terminer">Terminer</option>
                                                        @elseif($ContenuElement->statut_projet == "terminer")
                                                            <option value="{{ $ContenuElement->statut_projet }}" selected>{{ $ContenuElement->statut_projet }}</option>
                                                            <option value="en cours">En cours</option>
                                                            <option value="en attente de financement">En attente de financement</option>
                                                        @endif
                                                        
                                                    </select>
                                                </div>

                                                <div class="d-flex justify-content-end mt-4">
                                                    <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i>Modifier le projet!</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-sociprodd-blanc p-4">
                            
                            <div class="d-flex justify-content-end gap-3">
                                <span class="post-meta-date m-2">{{$ElementPaysRecuperer->created_at}}</span>
                                <span class="bg-sociprodd-jaune p-2 px-3 br-sociprodd-1">
                                    @if($NombreCommentaire == 0)
                                        {{ $NombreCommentaire }} Commentaire
                                    @else
                                        <a href="">{{ $NombreCommentaire }} Commentaires</a>
                                    @endif
                                </span>
                                
                                <span class="text-center bg-sociprodd-vert br-sociprodd-1 text-sociprodd-blanc p-2">
                                    {{$ContenuElement->statut_projet}}
                                </span>
                            </div>
                            <h2 class="mt-4">{{Crypt::decrypt($ElementPaysRecuperer->titre)}}</h2>
                            <h4 class="mb-3"><span>{{Crypt::decrypt($ElementPaysRecuperer->petite_description)}}</span></h4>
                            <p>{{Crypt::decrypt($ContenuElement->description)}}</p>
                        
                        </div>

                    </div>

                @endif

                @if($ElementPaysRecuperer->type_element != "projet")
                    <!-- form-->
                    <div class="col-lg-4">

                        @if($ElementPaysRecuperer->type_element == "reportage")
                            <form action="{{ route('detail-element-autre.nouveau-reportage', ['IdPays' => $PaysPris->id_pays, 'IdElement' => $ElementPaysRecuperer->id_element]) }}" method="POST">
                        @elseif($ElementPaysRecuperer->type_element == "podcast") 
                            <form action="{{ route('detail-element-autre.nouveau-podcast', ['IdPays' => $PaysPris->id_pays, 'IdElement' => $ElementPaysRecuperer->id_element]) }}" method="POST" enctype="multipart/form-data"> 
                        @elseif($ElementPaysRecuperer->type_element == "actualite") 
                            <form action="{{ route('detail-element-autre.nouvel-actualite', ['IdPays' => $PaysPris->id_pays, 'IdElement' => $ElementPaysRecuperer->id_element]) }}" method="POST" enctype="multipart/form-data"> 
                        @endif 
                                @csrf
                                <div class="d-flex flex-column bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                                    


                                    @if($ElementPaysRecuperer->type_element == "reportage")

                                        <div class="mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee">Lien video d'illustration<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="video" id="video" value="{{ old('video') }}" placeholder="le lien de la vidéo" required>
                                            @error('video')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                    
                                        <div class="mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee">Description<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                            <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 200px;" placeholder="écrivez ici...............">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                    @elseif($ElementPaysRecuperer->type_element == "podcast")    

                                        <div class="mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee">Fichier Audio (mp3 ou mp4 ou opus ou wav)<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="audio" id="audio" accept=".mp3,.mp4,.opus,.wav" required>
                                            @error('audio')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                        <div class="mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee">Description<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                            <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 200px;" placeholder="écrivez ici...............">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                    @elseif($ElementPaysRecuperer->type_element == "actualite")    

                                        <div class="mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee"> Image  <strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image" id="image" value="{{ old('image') }}" accept=".jpg,.jpeg,.png,.webp">
                                            @error('image')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee">Description<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 200px;" placeholder="écrivez ici..............." required>{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    @endif 
                                                
                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Publier!</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <!-- end: form-->
                @endif
                        
                        
            </div>
            <!-- end: Page Content -->



            
        </div>
    </main>
       
@endsection




@section('jsScripts')

    @if($ElementPaysRecuperer->type_element == "projet" && Crypt::decrypt($ContenuElement->lien_pdf) != null)

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
            
            
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
        </script>

    @endif
    
@endsection
