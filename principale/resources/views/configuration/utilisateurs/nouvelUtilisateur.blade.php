@extends('layouts.app')




@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <div class="d-flex justify-content-start mb-5">
    
                <a href="{{route('utilisateur.nos-utilisateurs')}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                    <svg xmlns="http://www.w3.org/2000/svg" TypewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                    retour
                </a>
            </div>
            
        
            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('inclusions.messageErrorSucces')

            <form action="{{route('utilisateur.nouvel-utilisateur.enregistrer')}}" method="POST">
               @csrf

               <div class="row">
                    <div class="col-lg-4">
                        
                    
                        <h2 class="text-sociprodd-noir">Type d'utilisateur</h2>
                        <div class="d-flex flex-column gap-4 p-4">
                            <label class="form-check nav-link fw-semi-bold d-flex gap-2">
                                <input type="radio" class="form-check-input" value="administrateur" name="choix_type_utilisateur" id="administrateur">
                                <span>Administrateur</span>
                            </label>
                            
                            <label class="form-check nav-link fw-semi-bold d-flex gap-2">
                                <input type="radio" class="form-check-input" value="comite" name="choix_type_utilisateur" id="comite">
                                <span>Comités directeur</span> 
                            </label>

                            <label class="form-check nav-link fw-semi-bold d-flex gap-2">
                                <input type="radio" class="form-check-input" value="representant" name="choix_type_utilisateur" id="representant">
                                <span>Représentant pays</span> 
                            </label>
                        </div>
                    </div>
                
                    <div class="col-lg-8">
                        <h2 class="text-sociprodd-noir">Information à saisir</h2>
                        <div class="d-flex flex-column p-4 bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee">
                            <div id="ChampButtonAction" style="display: none;">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Sauvegarder!</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    
                                    <div class="mb-3">
                                        <label class="d-flex text-sociprodd-bleuefoncee">Nom et prénom<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="nom_prenom" id="nom_prenom" value="{{ old('nom_prenom') }}" placeholder="Le nom et prénom" minlength="2" maxlength="75" required>
                                        @error('nom_prenom')
                                            <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="d-flex text-sociprodd-bleuefoncee">Adresse mail <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="l'adresse mail" minlength="10" maxlength="250" required>
                                        @error('email')
                                            <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    
                                </div>
                                <div class="col-lg-6">
                                    

                                    <div class="mb-3">
                                        <label class="d-flex text-sociprodd-bleuefoncee">Nom du poste <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="poste" id="poste" value="{{ old('poste') }}" placeholder="le nom du poste" minlength="10" maxlength="250" required>
                                        @error('poste')
                                            <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="d-flex flex-column mb-3">
                                        <label class="d-flex text-sociprodd-bleuefoncee">Numéros de téléphone<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                            
                                        <div class="d-flex gap-2">
                                            <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="indicatif_pays" id="indicatif_pays" required>
                                                <option value="" class="text-sociprodd-bleuefoncee" selected>+ xxx</option>
                                            </select>
                                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="number" id="numeros_contact" name="numeros_contact" placeholder="Téléphone" required>
                                        </div>
                                        @error('indicatif_pays')
                                            <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                        @enderror
                                        @error('numeros_contact')
                                            <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            
                            <div id="ChampPays" style="display: none;">
                                <div class="d-flex flex-column gap-2 mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Pays à associer<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    
                                    <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee text-sociprodd-bleuefoncee" name="pays_id" id="pays_id">
                                        <option value="" selected>Sélectionner un pays</option>

                                        @foreach($RecupererListePays as $RecupererListePaysIndividu)
                                            <option value="{{$RecupererListePaysIndividu->id_pays}}">{{Crypt::decrypt($RecupererListePaysIndividu->nom_normale)}}</option>
                                        @endforeach
                                    </select>
                                    @error('pays_id')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
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
		
		var existanceTypeRadios = document.querySelectorAll('input[name="choix_type_utilisateur"]');
    	var DivPaysRepresentant = document.getElementById('ChampPays');
    	var ButtonAction = document.getElementById('ChampButtonAction');
		var DivInscriptionDirecte = document.getElementById('ChampInscriptionExist');

		existanceTypeRadios.forEach(radio => {
			radio.addEventListener('change', AfficherColonne);
		});
		
		function AfficherColonne() {

			selectedExistanceType = document.querySelector('input[name="choix_type_utilisateur"]:checked');
			
			if (selectedExistanceType) {

                ButtonAction.style.display = 'block';

            	if (selectedExistanceType.value === "representant") {
					
					DivPaysRepresentant.style.display = 'block';

				}else{

					DivPaysRepresentant.style.display = 'none';
				}


			}
		}

	</script>
@endsection



@section('js_infos_pays')

    @include('inclusions.infos_pays_number')

@endsection