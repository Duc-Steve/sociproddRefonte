@extends('layouts.app')



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

            <div class="d-flex justify-content-start mb-5">
    
                <a href="{{route('pays.nos-pays')}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                    retour
                </a>
            </div>
            
        
            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('inclusions.messageErrorSucces')

            <form action="{{route('pays.nouveau-pays.enregistrer')}}" method="POST" enctype="multipart/form-data">
               @csrf
               
                <div id="ChampButtonAction" style="display: none;">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Sauvegarder!</button>
                    </div>
                </div>
                
                            
                <div class="mt-3">
                    <h2 class="text-sociprodd-noir">Type d'Entete</h2>
                    <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                        
                        <div class="row">
                            <div class="col-lg-3">
                                <label class=" form-check nav-link fw-semi-bold d-flex gap-2">
                                    <input type="radio" class="form-check-input" value="video" name="entete_choix" id="video">
                                    <span>Vidéo</span>
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="col-lg-3 form-check nav-link fw-semi-bold d-flex gap-2">
                                    <input type="radio" class="form-check-input" value="image_dynamique" name="entete_choix" id="image_dynamique">
                                    <span>Image dynamique</span> 
                                </label>
                            </div>

                            <div class="col-lg-3">
                                <label class="col-lg-3 form-check nav-link fw-semi-bold d-flex gap-2">
                                    <input type="radio" class="form-check-input" value="image_statique" name="entete_choix" id="image_statique">
                                    <span>Image statique</span> 
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="col-lg-3 form-check nav-link fw-semi-bold d-flex gap-2">
                                    <input type="radio" class="form-check-input" value="rien" name="entete_choix" id="rien">
                                    <span>Rien</span> 
                                </label>
                            </div>
                        </div> 
                    </div>
                </div>

                <div id="globalChamp" style="display: none;">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mt-4">
                                <h2 class="text-sociprodd-noir">Information du pays</h2>
                                <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee px-4 pb-4">
                                    <div class="mt-3">
                                        <label class="d-flex text-sociprodd-bleuefoncee">Nom correct du pays<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="nom_correct_pays" id="nom_correct_pays" value="{{ old('nom_correct_pays') }}" placeholder="nom correcte du pays" minlength="2" maxlength="55" required>
                                        @error('nom_correct_pays')
                                            <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mt-3">
                                        <label class="d-flex text-sociprodd-bleuefoncee">Code du pays<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="code_pays" id="code_pays" value="{{ old('code_pays') }}" placeholder="nom correcte du pays" maxlength="5" required>
                                        @error('code_pays')
                                            <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                                
                            <div class="d-flex flex-column mt-4">
                                <h2 class="text-sociprodd-noir">Fonctionnalités</h2>
                                <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                                    
                                    <div class="row">
                                        <div class="col-lg-6 mt-3">
                                            
                                            <div class="d-flex flex-column gap-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite1" name="fonctionalite[]" value="projet">
                                                    <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite1">Projets</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite2" name="fonctionalite[]" value="actualite">
                                                    <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite2">Interface des actualités</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite3" name="fonctionalite[]" value="podcast">
                                                    <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite3">Interface des podcast</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite4" name="fonctionalite[]" value="reportage">
                                                    <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite4">Interface des reportages</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite7" name="fonctionalite[]" value="membre_executif">
                                                    <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite7">Sous membre executif</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex flex-column gap-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite8" name="fonctionalite[]" value="coordonnee">
                                                    <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite8">Les coordonnées</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite9" name="fonctionalite[]" value="contact">
                                                    <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite9">Formulaire de contact</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite10" name="fonctionalite[]" value="newsletter">
                                                    <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite10">Formulaire de newsletter</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="fonctionalite11" name="fonctionalite[]" value="commentaire">
                                                    <label class="form-check-label text-sociprodd-bleuefoncee" for="fonctionalite11">Formulaire de commentaire</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4">

                            <h2 class="text-sociprodd-noir">Element d'entete</h2>
                            <div class="d-flex justify-content-center bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                                        
                                <div id="VideoFond" style="display: none;">
                                    
                                    <div class="mb-3">
                                        
                                        <label class="d-flex text-sociprodd-bleuefoncee">Phrase sur la video <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_video" id="phrase_video" placeholder="phrase video" value="{{ old('phrase_video') }}" maxlength="54">
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
                                

                                <div id="ImageDynamique" style="display: none;">

                                    <div class="mb-3">
                                        
                                        <label class="d-flex text-sociprodd-bleuefoncee">Phrase 1 accompagnant image 1 <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_un" id="phrase_un" placeholder="Phrase 1 accompagnant l'image 1" value="{{ old('phrase_un') }}" maxlength="54">
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
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_deux" id="phrase_deux" placeholder="Phrase 2 accompagnant l'image 2" value="{{ old('phrase_deux') }}" maxlength="54">
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
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_trois" id="phrase_trois" placeholder="Phrase 2 accompagnant l'image 2" value="{{ old('phrase_trois') }}" maxlength="54">
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

                                <div id="ImageStatique" style="display: none;">
                                    
                                    <div class="mb-3">
                                        
                                        <label class="d-flex text-sociprodd-bleuefoncee">Phrase pour l'image statique <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="phrase_statique" id="phrase_statique" placeholder="Phrase" value="{{ old('phrase_statique') }}" maxlength="54">
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

                                <div id="TextRienDiv" style="display: none;">
                                    <h4>Pas d'éléments à enregistrer pour ca</h4>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>


           </form>
                
                
        </div>
    </main>
       
@endsection




@section('jsScripts')

	<script>
		
        var globalChampDiv = document.getElementById('globalChamp');
		var existanceEnteteRadios = document.querySelectorAll('input[name="entete_choix"]');
    	var ButtonAction = document.getElementById('ChampButtonAction');
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

                globalChampDiv.style.display = 'block';
                ButtonAction.style.display = 'block';

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
@endsection