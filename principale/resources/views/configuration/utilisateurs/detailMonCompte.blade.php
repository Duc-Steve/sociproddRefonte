@extends('layouts.sansAside')




@section('content')

    <main class="content">
        <div class="container-fluid p-0">

        
            @if($UtilisateurConnecter->type_utilisateur == "representant") 
                <div class="d-flex justify-content-start mb-5">
        
                    <a href="{{ route('bilan-pays', ['IdPays' => $PaysPris->id_pays])}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                        retour
                    </a>
                </div>
            
            @else

                <div class="d-flex justify-content-start mb-5">
        
                    <a href="{{route('tableau-bord')}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                        retour
                    </a>
                </div>
            @endif
            
            
            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('inclusions.messageErrorSucces')

            <div class="row">
                <div class="col-lg-8 mt-3">
                    <h1 class="mt-4">Les informations de mon compte</h1>
                    
                    <div class="col-lg-12 mt-4">
                        <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                            
                            
                        @if($UtilisateurConnecter->type_utilisateur == "representant") 
                            <form action="{{ route('mon-compte.enregistrer', ['IdPays' => $PaysPris->id_pays]) }}" method="POST">
                        @else
                            <form action="{{ route('utilisateur.mon-compte.enregistrer') }}" method="POST">
                        @endif
                                @csrf
                                
                                
                                <div class="d-flex justify-content-end mb-3">
                                    <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Mettre à jours!</button>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-lg-6 mt-3">
                                        <div class="mb-3">
        									<label class="d-flex text-sociprodd-bleuefoncee">Votre nom et prénom<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
        									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="nom_prenom" id="nom_prenom" value="{{ Crypt::decrypt($UtilisateurConnecter->nom_prenom) }}" minlength="2" maxlength="75" required>
        									@error('nom_prenom')
        										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
        									@enderror
        								</div>
        
        								<div class="mb-3">
        									<label class="d-flex text-sociprodd-bleuefoncee">Votre adresse mail <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
        									
        									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="email" name="email" id="email" value="{{ Crypt::decrypt($UtilisateurConnecter->email) }}" readonly required>
        								
            								
        									@error('email')
        										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
        									@enderror
        								</div>
        								
        								
                                        <div class="d-flex flex-column mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee">Votre pays<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                                
                                            <div class="d-flex gap-2">
                                                <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="nom_correct_pays" id="nom_correct_pays" required>
                                                    @if(Crypt::decrypt($UtilisateurConnecter->pays) == null)
                                                        <option value="" class="text-sociprodd-bleuefoncee" selected>Aucun</option>
                                                    
                                                    @else 
                                                        <option value="{{Crypt::decrypt($UtilisateurConnecter->pays)}}" class="text-sociprodd-bleuefoncee" selected>{{Crypt::decrypt($UtilisateurConnecter->pays)}}</option>
                                                    @endif
                                                </select>
                                            </div>
                                            @error('nom_correct_pays')
                                                <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
        								<div class="mb-3">
        									<label class="d-flex text-sociprodd-bleuefoncee">Votre ville <strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
        									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="ville" id="ville" value="{{ Crypt::decrypt($UtilisateurConnecter->ville) }}">
        									@error('ville')
        										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
        									@enderror
        								</div>
        
        
                                    </div>
                                    
                                    <div class="col-lg-6 mt-3">
                                        
        								<div class="mb-3">
        									<label class="d-flex text-sociprodd-bleuefoncee">Votre adresse de résidence <strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
        									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="adresse" id="adresse" value="{{ Crypt::decrypt($UtilisateurConnecter->adresse) }}">
        									@error('adresse')
        										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
        									@enderror
        								</div>
        								
        								<div class="mb-3">
        									<label class="d-flex text-sociprodd-bleuefoncee">Votre numéros téléphone <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
        									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="numeros_contact" id="numeros_contact" value="{{ Crypt::decrypt($UtilisateurConnecter->numeros) }}" required>
        									@error('numeros_contact')
        										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
        									@enderror
        								</div>
                                    
                                        <div class="d-flex flex-column mb-3">
                                            <label class="d-flex text-sociprodd-bleuefoncee">Votre numéros whatsapp<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                             
        									    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="whatsapp" id="whatsapp" value="{{ Crypt::decrypt($UtilisateurConnecter->whatsapp) }}">
                                            
                                                @error('whatsapp')
                                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                                @enderror
                                            
                                        </div>
                                        
        								
                                        
        								<div class="mb-3">
        									<label class="d-flex text-sociprodd-bleuefoncee">Votre poste <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
        									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="poste" id="poste" value="{{ Crypt::decrypt($UtilisateurConnecter->poste) }}" readonly required>
        									@error('poste')
        										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
        									@enderror
        								</div>
                                    </div>
                                
                                </div>
                                
                                
                            </form>
                        </div>
                       
                    </div>
                
                
                </div>
                
                <div class="col-lg-4 mt-3">
					<h1 class="mt-4">Changer mon mot de passe</h1>
                
                    <div class="p-4 mt-4 bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee">
    					<form action="{{route('change-mot-passe.token')}}" method="POST" class="mt-4">
    						@csrf
    					
    						<div class="d-flex flex-column">
    							<label class="d-flex text-sociprodd-bleuefoncee">Adresse mail <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
    							<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="email" name="email" id="email" value="{{ Crypt::decrypt($UtilisateurConnecter->email) }}" readonly required>
    							@error('email')
    								<div class="text-sociprodd-jaune">{{ $message }}</div>
    							@enderror
    						</div>
    
    
    						<div class="text-center mt-4">
    							<button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Demande un changement!</button>
    						</div>
    						
						
					    </form>
                    </div>
                </div>

            </div>
            
            
        </div>
    </main>
       
@endsection


@if(Crypt::decrypt($UtilisateurConnecter->pays) == null)
    @section('js_infos_pays')
    
        @include('inclusions.infos_pays_name')
    
    @endsection
@endif

