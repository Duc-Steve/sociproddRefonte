@extends('layouts.action')




@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <div class="d-flex justify-content-start mb-5">
    
                <a href="{{ route('gestion-sous-membres-executif', ['IdPays' => $PaysPris->id_pays])}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                    retour
                </a>
            </div>
            
        
            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('inclusions.messageErrorSucces')

            <form action="{{route('nouveau-profile-executif.enregistrer', ['IdPays' => $PaysPris->id_pays])}}" method="POST" enctype="multipart/form-data">
               @csrf
            
                <div class="d-flex justify-content-end">
                    <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Sauvegarder!</button>
                </div>
                
                <div class="mt-3">
                    <h2 class="text-sociprodd-noir mb-3">Enregistrer un nouveau sous membre du bureau exécutif</h2>
                    <div class="d-flex flex-column p-4 bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee">
                        <div class="row">

                            <div class="col-lg-6 mt-3">  
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Nom et prénom<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="nom_prenom" id="nom_prenom" value="{{ old('nom_prenom') }}" placeholder="Le nom et prénom" minlength="2" maxlength="75" required>
                                    @error('nom_prenom')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                                        
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Choix du poste <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="poste" id="poste" required>

                                        @if($nombreSousMembreExecutifPays == 0)
                                            <option value="" selected>Sélectionnez le 1er poste</option>
                                            <option value="Réprésentant {{ Crypt::decrypt($PaysPris->nom_normale) }}">Réprésentant {{ Crypt::decrypt($PaysPris->nom_normale) }}</option>
                                        @else

                                            <option value="" selected>Sélectionnez un poste</option>
                                            @php
                                                // Créer un tableau des Postes déjà existantes
                                                $existingPostes = [];
                                                foreach($sousMembreExecutifPays as $sousMembreExecutifPaysIndividu) {
                                                    // Ajouter chaque poste existante dans le tableau
                                                    $existingPostes[] = Crypt::decrypt($sousMembreExecutifPaysIndividu->poste);
                                                }

                                            @endphp

                                            // Boucle pour les Postes qui incluent le nom du pays
                                            @foreach(['Réprésentant', 'Réprésentante adjointe 1', 'Réprésentant adjoint 2'] as $poste)
                                                @php
                                                    // Construire le nom complet de la position avec le nom du pays décrypté
                                                    $fullPoste = $poste . ' ' . Crypt::decrypt($PaysPris->nom_normale);
                                                @endphp

                                                // Vérifier si le poste n'existe pas déjà avant de l'ajouter dans les options
                                                @if(!in_array($fullPoste, $existingPostes))
                                                    <option value="{{ $fullPoste }}">{{ $fullPoste }}</option>
                                                @endif
                                            @endforeach

                                            // Boucle pour les autres Postes fixes
                                            @foreach([
                                                'Sécrétaire générale',
                                                'Sécrétaire générale adjoint(e)',
                                                'Chargé de la discipline',
                                                'Chargé de la discipline adjoint(e)',
                                                'Conseiller(ère) des affaires financières',
                                                'Conseiller(ère) des affaires extérieures',
                                                'Conseiller(ère) des affaires sociales et humanitaires',
                                                'Conseiller(ère) des affaires juridiques',
                                                'Commissaire aux comptes',
                                                'Commissaire aux comptes adjoint(e)'
                                            ] as $poste)
                                                // Vérifier si la position n'existe pas déjà avant de l'ajouter dans les options
                                                @if(!in_array($poste, $existingPostes))
                                                    <option value="{{ $poste }}">{{ $poste }}</option>
                                                @endif
                                            @endforeach



                                        @endif
                                        
                                    </select>
                                    @error('poste')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            
                            <div class="col-lg-6 mt-3"> 
                                
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Petit message<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 118px;" placeholder="écrivez ici..............." maxlength="250">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>

                        </div>
                        

                        <div class="mb-3">
                            <label class="d-flex text-sociprodd-bleuefoncee">Adresse mail professionnelle <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="l'adresse mail" minlength="10" maxlength="250" required>
                            @error('email')
                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                            @enderror
                        </div>
                                
                        <div class="mb-3">
                            <label class="d-flex text-sociprodd-bleuefoncee"> Image de presentation <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                            <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image" id="image" accept=".jpg,.jpeg,.png,.webp">
                            @error('image')
                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                            @enderror
                        </div> 
                    </div>
                </div>
                                

           </form>
                
                
        </div>
    </main>
       
@endsection

