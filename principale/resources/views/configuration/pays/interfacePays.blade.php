@extends('layouts.layoutsConfiguration.action')



@section('style_css')
    <style>
        .form-check-input {
            width: 20px;
            height: 20px;
        }
        .form-check {
            display: flex;
            gap: 0.5em;
            align-items: center;
        }
    </style>
@endsection


@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            
        
            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('includes.paysConfiguration.messageErrorSucces')

            <form action="{{ route('detail-interface.mise-a-jour', ['IdPays' => $InterfacePaysRecuperer->pays_id])}}" method="POST">
                @csrf  
                <div class="d-flex justify-content-end mb-3">
                   
                    <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Mettre à jour!</button>
                </div>

                @if($UtilisateurConnecter->type_utilisateur == "administrateur")
                    <div class="d-flex flex-column mt-4">
                        <h2 class="text-sociprodd-noir">Type d'Entete</h2>
                        
                        <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                            
                            <div class="row">
                                <div class="col-lg-3">
                                        
                                    <label class="form-check nav-link fw-semi-bold d-flex gap-2">
                                        
                                        @if(Crypt::decrypt($InterfacePaysRecuperer->video) == "true")   
                                            <input type="radio" class="form-check-input" value="video" name="entete_choix" id="video" checked>
                                        @else
                                            <input type="radio" class="form-check-input" value="video" name="entete_choix" id="video">
                                        @endif

                                        <span>Vidéo</span>
                                    </label>
                                </div>
                                
                                <div class="col-lg-3">
                                    <label class="form-check nav-link fw-semi-bold d-flex gap-2">

                                        @if(Crypt::decrypt($InterfacePaysRecuperer->image_dynamique) == "true") 
                                            <input type="radio" class="form-check-input" value="image_dynamique" name="entete_choix" id="image_dynamique" checked>
                                        @else
                                            <input type="radio" class="form-check-input" value="image_dynamique" name="entete_choix" id="image_dynamique">
                                        @endif

                                        <span>Image dynamique</span> 
                                    </label>
                                </div>

                                <div class="col-lg-3">
                                    <label class="form-check nav-link fw-semi-bold d-flex gap-2">
    
                                        @if(Crypt::decrypt($InterfacePaysRecuperer->image_statique) == "true")
                                            <input type="radio" class="form-check-input" value="image_statique" name="entete_choix" id="image_statique" checked>
                                        @else
                                            <input type="radio" class="form-check-input" value="image_statique" name="entete_choix" id="image_statique">
                                        @endif

                                        <span>Image statique</span> 
                                    </label>
                                </div>
                                
                                <div class="col-lg-3">
                                    <label class="form-check nav-link fw-semi-bold d-flex gap-2">

                                        @if(Crypt::decrypt($InterfacePaysRecuperer->video) == "false" && Crypt::decrypt($InterfacePaysRecuperer->image_dynamique) == "false" && Crypt::decrypt($InterfacePaysRecuperer->image_statique) == "false")
                                            <input type="radio" class="form-check-input" value="rien" name="entete_choix" id="rien" checked>
                                        @else
                                            <input type="radio" class="form-check-input" value="rien" name="entete_choix" id="rien">
                                        @endif

                                        <span>Rien</span> 
                                    </label>
                                </div>
                            </div> 
                        </div>

                    </div>
                @elseif($UtilisateurConnecter->type_utilisateur == "representant")
                    <div class="d-flex flex-column mt-4">
                        <h2 class="text-sociprodd-noir">Type d'Entete</h2>
                        
                        <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                    
                            <label class="form-check nav-link fw-semi-bold d-flex gap-2">
                                
                                @if(Crypt::decrypt($InterfacePaysRecuperer->video) == "true")   
                                    <input type="radio" class="form-check-input" value="video" name="entete_choix" id="video" checked>
                                    <span>Vidéo</span>
                                @elseif(Crypt::decrypt($InterfacePaysRecuperer->image_dynamique) == "true") 
                                    <input type="radio" class="form-check-input" value="image_dynamique" name="entete_choix" id="image_dynamique" checked>
                                    <span>Image dynamique</span>
                                @elseif(Crypt::decrypt($InterfacePaysRecuperer->image_statique) == "true")
                                    <input type="radio" class="form-check-input" value="image_statique" name="entete_choix" id="image_statique" checked>
                                    <span>Image statique</span>
                                @elseif(Crypt::decrypt($InterfacePaysRecuperer->video) == "false" && Crypt::decrypt($InterfacePaysRecuperer->image_dynamique) == "false" && Crypt::decrypt($InterfacePaysRecuperer->image_statique) == "false")
                                    <input type="radio" class="form-check-input" value="rien" name="entete_choix" id="rien" checked>
                                    <span>Rien</span>
                                @endif

                            </label>
                        </div>

                    </div>
                @endif
                
                <div class="row">
                    <div class="col-lg-8">
                    
                        <div class="mt-4">
                            <h2 class="text-sociprodd-noir">Information du pays</h2>
                            <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee px-4 pb-4">
                                <div class="mt-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Nom correct du pays<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    @if($UtilisateurConnecter->type_utilisateur == "administrateur")
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="nom_correct_pays" id="nom_correct_pays" value="{{Crypt::decrypt($PaysPris->nom_normale)}}" readonly required>
                                    @else
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="nom_correct_pays" id="nom_correct_pays" value="{{Crypt::decrypt($PaysPris->nom_normale)}}" readonly required>                                   
                                    @endif
                                </div>
                                <div class="mt-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Code du pays<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    @if($UtilisateurConnecter->type_utilisateur == "administrateur")
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="code_pays" id="code_pays" value="{{Crypt::decrypt($PaysPris->code_pays)}}" readonly required>
                                    @else
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="code_pays" id="code_pays" value="{{Crypt::decrypt($PaysPris->code_pays)}}" readonly required>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-column mt-4">
                            <h2 class="text-sociprodd-noir">Fonctionnalités</h2>
                            <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">

                                <div class="row">

                                    <div class="col-lg-6">
                                        
                                        <div class="d-flex flex-column gap-2 mt-3">
                                            <div class="form-check">

                                                @if(Crypt::decrypt($InterfacePaysRecuperer->projet) == "true")    
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite1" name="fonctionalite[]" value="projet" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite1" name="fonctionalite[]" value="projet">
                                                @endif

                                                <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite1">Projet</label>
                                            </div>
                                            <div class="form-check">
                                                    
                                                @if(Crypt::decrypt($InterfacePaysRecuperer->actualite) == "true")  
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite2" name="fonctionalite[]" value="actualite" checked>
                                                @else 
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite2" name="fonctionalite[]" value="actualite">
                                                @endif

                                                <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite2">Interface des actualités</label>
                                            </div>
                                            <div class="form-check">
                                                    
                                                @if(Crypt::decrypt($InterfacePaysRecuperer->podcast) == "true")  
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite3" name="fonctionalite[]" value="podcast" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite3" name="fonctionalite[]" value="podcast">
                                                @endif

                                                <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite3">Interface des podcast</label>
                                            </div>
                                            <div class="form-check">

                                                @if(Crypt::decrypt($InterfacePaysRecuperer->reportage) == "true")  
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite4" name="fonctionalite[]" value="reportage" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite4" name="fonctionalite[]" value="reportage">
                                                @endif

                                                <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite4">Interface des reportages</label>
                                            </div>

                                            <div class="form-check">

                                                @if(Crypt::decrypt($InterfacePaysRecuperer->membre_executif) == "true")  
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite7" name="fonctionalite[]" value="membre_executif" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite7" name="fonctionalite[]" value="membre_executif">
                                                @endif

                                                <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite7">Sous membre executif</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex flex-column gap-2 mt-3">
                                            <div class="form-check">

                                                @if(Crypt::decrypt($InterfacePaysRecuperer->coordonnee) == "true")  
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite8" name="fonctionalite[]" value="coordonnee" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite8" name="fonctionalite[]" value="coordonnee">
                                                @endif

                                                <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite8">Les coordonnées</label>
                                            </div>
                                            <div class="form-check">

                                                @if(Crypt::decrypt($InterfacePaysRecuperer->contact) == "true")  
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite9" name="fonctionalite[]" value="contact" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite9" name="fonctionalite[]" value="contact">
                                                @endif

                                                <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite9">Formulaire de contact</label>
                                            </div>
                                            <div class="form-check">

                                                @if(Crypt::decrypt($InterfacePaysRecuperer->newsletter) == "true")  
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite10" name="fonctionalite[]" value="newsletter" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite10" name="fonctionalite[]" value="newsletter">
                                                @endif

                                                <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite10">Formulaire de newsletter</label>
                                            </div>
                                            <div class="form-check">

                                                @if(Crypt::decrypt($InterfacePaysRecuperer->commentaire) == "true")  
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite11" name="fonctionalite[]" value="commentaire" checked>
                                                @else
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite11" name="fonctionalite[]" value="commentaire">
                                                @endif

                                                <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite11">Formulaire de commentaire</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4">
                        <div id="globalChamp">
                            
                            <h2 class="text-sociprodd-noir">Element d'entete</h2>
                            <div class="d-flex justify-content-center bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                                 
                                @if($UtilisateurConnecter->type_utilisateur == "administrateur")     
                                    <div id="VideoFond" style="display: none;">
                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase sur la video <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_video" id="phrase_video" value="{{ Crypt::decrypt($DonneeEntete->phrase_video) }}" maxlength="54">
                                            @error('phrase_video')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee">Vidéo en fond<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="video" id="video" accept=".mp4,.avi,.mpeg,.mov" file="{{ old('video') }}">
                                            @error('video')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                @elseif($UtilisateurConnecter->type_utilisateur == "representant" && Crypt::decrypt($InterfacePaysRecuperer->video) == "true")
                                    <div id="VideoFond">
                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase sur la video <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_video" id="phrase_video" value="{{ Crypt::decrypt($DonneeEntete->phrase_video) }}" maxlength="54">
                                            @error('phrase_video')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee">Vidéo en fond<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="video" id="video" accept=".mp4,.avi,.mpeg,.mov" file="{{ old('video') }}">
                                            @error('video')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                @endif


                                @if($UtilisateurConnecter->type_utilisateur == "administrateur")     
                                    <div id="ImageDynamique" style="display: none;">
                                        
                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase 1 accompagnant image 1 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_un" id="phrase_un" value="{{ Crypt::decrypt($DonneeEntete->phrase_un) }}" maxlength="54">
                                            @error('phrase_un')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Image 1 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image_un" id="image_un" accept=".jpg,.jpeg,.png,.webp" file="{{ old('image_un') }}">
                                            @error('image_un')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase 2 accompagnant image 2 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_deux" id="phrase_deux" value="{{ Crypt::decrypt($DonneeEntete->phrase_deux) }}" maxlength="54">
                                            @error('phrase_deux')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Image 2 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image_deux" id="image_deux" accept=".jpg,.jpeg,.png,.webp" file="{{ old('image_deux') }}">
                                            @error('image_deux')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase 3 accompagnant image 3 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_trois" id="phrase_trois" value="{{ Crypt::decrypt($DonneeEntete->phrase_trois) }}" maxlength="54">
                                            @error('phrase_trois')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Image 3 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image_trois" id="image_trois" accept=".jpg,.jpeg,.png,.webp" file="{{ old('image_trois') }}">
                                            @error('image_trois')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>
                                    </div>
                                @elseif($UtilisateurConnecter->type_utilisateur == "representant" && Crypt::decrypt($InterfacePaysRecuperer->image_dynamique) == "true")
                                    <div id="ImageDynamique">
                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase 1 accompagnant image 1 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_un" id="phrase_un" value="{{ Crypt::decrypt($DonneeEntete->phrase_un) }}" maxlength="54">
                                            @error('phrase_un')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Image 1 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image_un" id="image_un" accept=".jpg,.jpeg,.png,.webp" file="{{ old('image_un') }}">
                                            @error('image_un')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase 2 accompagnant image 2 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_deux" id="phrase_deux" value="{{ Crypt::decrypt($DonneeEntete->phrase_deux) }}" maxlength="54">
                                            @error('phrase_deux')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Image 2 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image_deux" id="image_deux" accept=".jpg,.jpeg,.png,.webp" file="{{ old('image_deux') }}">
                                            @error('image_deux')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase 3 accompagnant image 3 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_trois" id="phrase_trois" value="{{ Crypt::decrypt($DonneeEntete->phrase_trois) }}" maxlength="54">
                                            @error('phrase_trois')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Image 3 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image_trois" id="image_trois" accept=".jpg,.jpeg,.png,.webp" file="{{ old('image_trois') }}">
                                            @error('image_trois')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>
                                    </div>
                                @endif



                                @if($UtilisateurConnecter->type_utilisateur == "administrateur")     
                                    <div id="ImageStatique" style="display: none;">
                                        
                                    
                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase pour l'image statique <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_statique" id="phrase_statique" value="{{ Crypt::decrypt($DonneeEntete->phrase_statique) }}" maxlength="54">
                                            @error('phrase_statique')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Image statique<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image_statique" id="image_statique" accept=".jpg,.jpeg,.png,.webp" file="{{ old('image_statique') }}">
                                            @error('image_statique')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>
                                    </div>
                                @elseif($UtilisateurConnecter->type_utilisateur == "representant" && Crypt::decrypt($InterfacePaysRecuperer->image_statique) == "true")
                                    <div id="ImageStatique">
                                    
                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Phrase pour l'image statique <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_statique" id="phrase_statique" value="{{ Crypt::decrypt($DonneeEntete->phrase_statique) }}" maxlength="54">
                                            @error('phrase_statique')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>

                                        <div class="mb-3">
                                            
                                            <label class="d-flex text-sociprodd-bleuefoncee">Image statique<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image_statique" id="image_statique" accept=".jpg,.jpeg,.png,.webp" file="{{ old('image_statique') }}">
                                            @error('image_statique')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                                
                                        </div>
                                    </div>
                                @endif

                                
                                    
                                @if($UtilisateurConnecter->type_utilisateur == "administrateur")     
                                    <div id="TextRienDiv" style="display: none;">
                                        <h4>Pas d'éléments à enregistrer pour ca</h4>
                                    </div>
                                @elseif($UtilisateurConnecter->type_utilisateur == "representant" && Crypt::decrypt($InterfacePaysRecuperer->video) == "false" && Crypt::decrypt($InterfacePaysRecuperer->image_dynamique) == "false" && Crypt::decrypt($InterfacePaysRecuperer->image_statique) == "false")
                                    <div id="TextRienDiv">
                                        <h4>Pas d'éléments à enregistrer pour ca</h4>
                                    </div>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>  
        </div>
    </main>

@endsection


@section('jsScripts')

    @if($UtilisateurConnecter->type_utilisateur == "administrateur")
        <script>
            
            var existanceEnteteRadios = document.querySelectorAll('input[name="entete_choix"]');
            var DivVideoFond = document.getElementById('VideoFond');
            var DivImageDynamique = document.getElementById('ImageDynamique');
            var DivImageStatique = document.getElementById('ImageStatique');
            var TextRienPhrase = document.getElementById('TextRienDiv');

            existanceEnteteRadios.forEach(radio => {
                radio.addEventListener('change', AfficherColonne);
            });
            
            function AfficherColonne() {

                selectedexistanceEntete = document.querySelector('input[name="entete_choix"]:checked');
                
                if (selectedexistanceEntete) {


                    if (selectedexistanceEntete.value === "image_dynamique") {
                        
                        DivImageDynamique.style.display = 'block';
                        DivVideoFond.style.display = 'none';
                        DivImageStatique.style.display = 'none';
                        TextRienPhrase.style.display = 'none';

                    }else if(selectedexistanceEntete.value === "image_statique"){
                            
                        DivImageDynamique.style.display = 'none';
                        DivVideoFond.style.display = 'none';
                        DivImageStatique.style.display = 'block';
                        TextRienPhrase.style.display = 'none';

                    }else if(selectedexistanceEntete.value === "video"){

                        DivImageDynamique.style.display = 'none';
                        DivVideoFond.style.display = 'block';
                        DivImageStatique.style.display = 'none';
                        TextRienPhrase.style.display = 'none';

                    }else if(selectedexistanceEntete.value === "rien"){

                        DivImageDynamique.style.display = 'none';
                        DivVideoFond.style.display = 'none';
                        DivImageStatique.style.display = 'none';
                        TextRienPhrase.style.display = 'block';

                    }


                }
            }

        </script>
    @endif
@endsection
