@extends('layouts.action')



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
            @include('inclusions.messageErrorSucces')

            <form action="{{route('nouveau-element.enregistrer', ['IdPays' => $PaysPris->id_pays])}}" method="POST" enctype="multipart/form-data">
               @csrf
               
                <div id="ChampButtonAction" style="display: none;">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Sauvegarder!</button>
                    </div>
                </div>

                <div class="mt-3">
                    
                
                    <h2 class="text-sociprodd-noir">Type d'élément</h2>
                    <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                        
                        <div class="row">
                            
                            <div class="col-lg-6"> 
                                <div class="d-flex flex-column gap-4">
                                    
                                    @if(Crypt::decrypt($InterfacePaysRecuperer->actualite) == "true")    
                                        <label class="form-check nav-link fw-semi-bold d-flex gap-2">
                                            <input type="radio" class="form-check-input" value="actualite" name="choix_type_element" id="actualite">
                                            <span>Actualite</span>
                                        </label>
                                    @endif
                                    
                                    @if(Crypt::decrypt($InterfacePaysRecuperer->reportage) == "true")   
                                        <label class="form-check nav-link fw-semi-bold d-flex gap-2">
                                            <input type="radio" class="form-check-input" value="reportage" name="choix_type_element" id="reportage">
                                            <span>Reportage</span> 
                                        </label>
                                    @endif

                                </div>
                            </div>
                            
                            <div class="col-lg-6"> 
                                <div class="d-flex flex-column gap-4">

                                    @if(Crypt::decrypt($InterfacePaysRecuperer->podcast) == "true") 
                                        <label class="form-check nav-link fw-semi-bold d-flex gap-2">
                                            <input type="radio" class="form-check-input" value="podcast" name="choix_type_element" id="podcast">
                                            <span>Podcast</span> 
                                        </label>
                                    @endif
                                    
                                    
                                    @if(Crypt::decrypt($InterfacePaysRecuperer->projet) == "true") 
                                        <label class="form-check nav-link fw-semi-bold d-flex gap-2">
                                            <input type="radio" class="form-check-input" value="projet" name="choix_type_element" id="projet">
                                            <span>Projet</span> 
                                        </label>
                                    @endif
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            
                <div class="mt-3">
                    <h2 class="text-sociprodd-noir">Information à saisir</h2>
                    <div class="d-flex flex-column p-4 bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee">
                        <div class="row">
                            <div class="col-lg-6 mt-3">  
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Titre de l'élément<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="titre" id="titre" value="{{ old('titre') }}" placeholder="Le nom et prénom" minlength="2" maxlength="75" required>
                                    @error('titre')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                

                                <div id="VideoAction" style="display: none;" class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Lien video d'illustration<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="video" id="video" value="{{ old('video') }}" placeholder="le lien de la vidéo">
                                    @error('video')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                

                                <div id="ImageAction" style="display: none;" class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee"> Image de presentation <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image" id="image" value="{{ old('image') }}" accept=".jpg,.jpeg,.png,.webp">
                                    @error('image')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>

                                                        
                                <div id="TypeProjet" style="display: none;" class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Type de projet<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="type_projet" id="type_projet">

                                        <option value="" selected>Sélectionnez un type</option>
                                        <option value="humanitaire">humanitaire</option>
                                        <option value="sociale">sociale</option>
                                        
                                    </select>
                                </div>

                            </div>
                            <div class="col-lg-6 mt-3">
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Petite description<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 118px;" placeholder="écrivez ici...............">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                                               
                                <div id="StatutProjet" style="display: none;" class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Statut du projet<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="statut_projet" id="statut_projet">

                                        <option value="" selected>Sélectionnez un statut</option>
                                        <option value="en cours">En cours</option>
                                        <option value="terminer">Terminer</option>
                                        <option value="en attente de financement">En attente de financement</option>
                                        
                                    </select>
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
		
		var existanceTypeRadios = document.querySelectorAll('input[name="choix_type_element"]');
    	var ButtonAction = document.getElementById('ChampButtonAction');
		var DivVideoAction = document.getElementById('VideoAction');
		var DivImageAction = document.getElementById('ImageAction');
        var DivTypeProjet = document.getElementById('TypeProjet');
        var DivStatutProjet = document.getElementById('StatutProjet');

		existanceTypeRadios.forEach(radio => {
			radio.addEventListener('change', AfficherColonne);
		});
		
		function AfficherColonne() {

			selectedExistanceType = document.querySelector('input[name="choix_type_element"]:checked');
			
			if (selectedExistanceType) {

                ButtonAction.style.display = 'block';

            	if (selectedExistanceType.value === "podcast" ||
                    selectedExistanceType.value === "actualite") {
					
                    DivImageAction.style.display = 'block';
                    DivVideoAction.style.display = 'block';
                    DivTypeProjet.style.display = 'none';
                    DivStatutProjet.style.display = 'none';

				}else if(selectedExistanceType.value === "projet"){
                        
                    DivImageAction.style.display = 'block';
                    DivTypeProjet.style.display = 'block';
                    DivVideoAction.style.display = 'none';
                    DivStatutProjet.style.display = 'block';

                }else {

                    DivImageAction.style.display = 'none';
                    DivVideoAction.style.display = 'block';
                    DivTypeProjet.style.display = 'none';
                    DivStatutProjet.style.display = 'none';

				}


			}
		}

	</script>
@endsection


