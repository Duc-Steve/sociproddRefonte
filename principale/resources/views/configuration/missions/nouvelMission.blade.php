@extends('layouts.layoutsConfiguration.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Nouvelle mission</title>
                

@endsection

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
    
                <a href="{{route('missions.nos-missions')}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                    retour
                </a>
            </div>
            
    
            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('includes.paysConfiguration.messageErrorSucces')

            <form action="{{route('missions.nouvelle-mission.enregistrer')}}" method="POST">
               @csrf

                <div class="d-flex justify-content-end">
                    <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Sauvegarder!</button>
                </div>
                
                <h2 class="text-sociprodd-noir">Information de la mission</h2>
                <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee px-4 pb-4">
                    <div class="mt-3">
                        <label class="d-flex text-sociprodd-bleuefoncee">Mission<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                        

                        <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="nom_mission" id="nom_mission" required>
                            <option value="" selected>Sélectionnez une mission</option>
                            @php
                                // Créer un tableau des missions déjà existantes
                                $existingmissions = [];
                                foreach ($missionsListe as $missionsListeIndividu) {
                                    // Ajouter chaque mission existante dans le tableau
                                    $existingmissions[] = Crypt::decrypt($missionsListeIndividu->nom_mission);
                                }
                            @endphp

                            {{-- Boucle pour les missions --}}
                            @foreach ([
                                "Promouvoir l'éducation juridique",
                                "Promouvoir et défendre les droits humains et les libertés et particulièrement ceux des personnes vulnérables",
                                "Promouvoir les droits des femmes, les droits des minorités et l'égalité de genre",
                                "Favoriser l'inclusion et l'autonomisation des couches sociales défavorisées",
                                "Promouvoir la bonne gouvernance et le développement social",
                                "Protection de l’environnement et infrastructure publique",
                            ] as $mission)
                                {{-- Vérifier si la mission n'existe pas déjà avant de l'ajouter dans les options --}}
                                @if (!in_array($mission, $existingmissions))
                                    <option value="{{ $mission }}">{{ $mission }}</option>
                                @endif
                            @endforeach
                        </select>

                            
                        @error('nom_mission')
                            <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                        @enderror
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