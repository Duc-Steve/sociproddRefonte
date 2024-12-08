@extends('layouts.sansAside')


@section('css_tableau')
    @include('inclusions.tableau_css')
@endsection


@section('content')

    <main class="content">
        <div class="container-fluid p-0">

        
            

            <div class="d-flex justify-content-start mb-5">
    
                <a href="{{route('utilisateur.nos-utilisateurs')}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                    retour
                </a>
            </div>
            
            
            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('inclusions.messageErrorSucces')

  
            <h1 class="mt-4">Les informations de mon compte</h1>
            
            <div class="col-lg-12 mt-4">
                <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                    
                    
                    <form action="{{ route('utilisateur.detail-utilisateur.enregistrer', ['IdUtilisateur' => $RecupererUtilisateur->id_utilisateur]) }}" method="POST">
                
                        @csrf
                        
                        
                        <div class="d-flex justify-content-end mb-3">
                            <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Mettre à jours!</button>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-6 mt-3">
                                <div class="mb-3">
									<label class="d-flex text-sociprodd-bleuefoncee">Votre nom et prénom<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="nom_prenom" id="nom_prenom" value="{{ Crypt::decrypt($RecupererUtilisateur->nom_prenom) }}" minlength="2" maxlength="75" readonly required>
									@error('nom_prenom')
										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
									@enderror
								</div>

								<div class="mb-3">
									<label class="d-flex text-sociprodd-bleuefoncee">Votre adresse mail <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
									
									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="email" name="email" id="email" value="{{ Crypt::decrypt($RecupererUtilisateur->email) }}" required>
								
    								
									@error('email')
										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
									@enderror
								</div>
								
								
                                <div class="d-flex flex-column mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Votre pays<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                   
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="ville" id="ville" value="{{ Crypt::decrypt($RecupererUtilisateur->pays) }}" readonly>
                              
                                    @error('nom_correct_pays')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                
								<div class="mb-3">
									<label class="d-flex text-sociprodd-bleuefoncee">Votre ville <strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="ville" id="ville" value="{{ Crypt::decrypt($RecupererUtilisateur->ville) }}" readonly>
									@error('ville')
										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
									@enderror
								</div>


                            </div>
                            
                            <div class="col-lg-6 mt-3">
                                
								<div class="mb-3">
									<label class="d-flex text-sociprodd-bleuefoncee">Votre adresse de résidence <strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="adresse" id="adresse" value="{{ Crypt::decrypt($RecupererUtilisateur->adresse) }}" readonly>
									@error('adresse')
										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
									@enderror
								</div>
								
								<div class="mb-3">
									<label class="d-flex text-sociprodd-bleuefoncee">Votre numéros téléphone <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="numeros_contact" id="numeros_contact" value="{{ Crypt::decrypt($RecupererUtilisateur->numeros) }}" readonly required>
									@error('numeros_contact')
										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
									@enderror
								</div>
                            
                                <div class="d-flex flex-column mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Votre numéros whatsapp<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                 
								    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="whatsapp" id="whatsapp" value="{{ Crypt::decrypt($RecupererUtilisateur->whatsapp) }}" readonly>
                                
                                    @error('whatsapp')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                    
                                </div>
                                
								
                                
								<div class="row">
    								<div class="col-lg-6 mb-3">
    									<label class="d-flex text-sociprodd-bleuefoncee">Votre poste <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
    									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="poste" id="poste" value="{{ Crypt::decrypt($RecupererUtilisateur->poste) }}" readonly required>
    									@error('poste')
    										<div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
    									@enderror
    								</div>
    								
    									
                                    
    								<div class="col-lg-6 mb-3">
    									<label class="d-flex text-sociprodd-bleuefoncee">Votre poste <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
    									<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" value="{{ $RecupererUtilisateur->type_utilisateur }}" readonly required>
    								</div>
								</div>
                            </div>
                        
                        </div>
                        
                        
                    </form>
                </div>
               
            </div>
        
       
            
            <h1 class="mt-4">Les réseaux utiliser</h1>
            
            
            
            <div class="col-lg-12 mt-4">
                <div class="p-2 bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee">
                    
                    <table id="example1" class="table table-bordered mt-3" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" 
                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">							
                        <thead>
                            <tr class="bg-sociprodd-jaune text-sociprodd-bleuefoncee">
                                <th scope="col" data-field="data" data-editable="true">Date enregis.</th>
                                <th scope="col" data-field="data" data-editable="true">Utilisateur</th>
                                <th scope="col" data-field="data" data-editable="true">Adresse IP</th>
                                <th scope="col" data-field="data" data-editable="true">Nombre Connexion</th>
                                <th scope="col" data-field="data" data-editable="true">Sécurité</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ReseauxConnexion as $ReseauxConnexionIndividu)
                                <tr>
                                    <th>{{ $ReseauxConnexionIndividu->created_at }}</th>
                                    <th>{{ Crypt::decrypt($ReseauxConnexionIndividu->nom_prenom) }}</th>
                                    <th>{{ Crypt::decrypt($ReseauxConnexionIndividu->ip_address) }}</th>
                                     
                                    <th>{{ $ReseauxConnexionIndividu->nombre_connexions }}</th>  
                                    <th>{{ Crypt::decrypt($ReseauxConnexionIndividu->securite) }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            
        </div>
    </main>
       
@endsection



@section('js_tableau')
    @include('inclusions.tableau_js')
    
    <script>
      $(function () {
            $("#example1").DataTable({
                "responsive": true, "autoWidth": false,
                "buttons": ["csv", "excel", "pdf"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            
        });
    </script>
@endsection