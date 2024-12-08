@extends('layouts.action')


@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            
        
            <div class="d-flex justify-content-start mb-5">
                
                <a href="{{route('nos-coordonnees', ['IdPays' => $InterfacePaysRecuperer->pays_id])}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                    retour
                </a>
            </div>

            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('inclusions.messageErrorSucces')

            <form action="{{ route('nouveau-coordonnee.enregistrement', ['IdPays' => $InterfacePaysRecuperer->pays_id])}}" method="POST" enctype="multipart/form-data">
                @csrf  
                <div class="d-flex justify-content-end mb-3">
                
                    <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Sauvegarder!</button>
                </div>
                <div class="d-flex flex-column mt-4">
                    <h2 class="text-sociprodd-noir">Coordonnees à enregistrer</h2>
                    
                    <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                            
                    <div class="row">
                        <div class="col-lg-6 mt-3">
                                
                            <div class="d-flex flex-column mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">Numéros de téléphone<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" id="numeros_contact" name="numeros_contact" value="{{ old('numeros_contact') }}" placeholder="Téléphone simple" required>
                                
                                @error('numeros_contact')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">Numéros fixe<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" id="numeros_fixe" name="numeros_fixe" value="{{ old('numeros_fixe') }}" placeholder="Téléphone fixe" required>
                                
                                @error('numeros_fixe')
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
                            

                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">Longitude<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="longitude" id="longitude" value="{{ old('longitude') }}" placeholder="le nom du longitude" minlength="3" maxlength="50" required>
                                @error('longitude')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>
                            

                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">Latitude<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="latitude" id="latitude" value="{{ old('latitude') }}" placeholder="le nom du latitude" minlength="3" maxlength="50" required>
                                @error('latitude')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">Adresse (localisation) <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="localisation" id="localisation" value="{{ old('localisation') }}" placeholder="l'Adresse (localisation)" minlength="3" maxlength="150" required>
                                @error('localisation')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        
                    
                        <div class="col-lg-6 mt-3">

                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">URL Facebook<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="url" name="url_facebook" id="url_facebook" value="{{ old('url_facebook') }}" placeholder="le lien de la page facebook" maxlength="250" required>
                                @error('url_facebook')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">URL Twitter<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="url" name="url_twitter" id="url_twitter" value="{{ old('url_twitter') }}" placeholder="le lien de la page twitter" maxlength="250" required>
                                @error('url_twitter')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            
                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">URL Youtube<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="url" name="url_youtube" id="url_youtube" value="{{ old('url_youtube') }}" placeholder="le lien de la page youtube" maxlength="250" required>
                                @error('url_youtube')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">URL Tiktok<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="url" name="url_tiktok" id="url_tiktok" value="{{ old('url_tiktok') }}" placeholder="le lien de la page tiktok" maxlength="250" required>
                                @error('url_tiktok')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            
                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">URL Linkedin<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="url" name="url_linkedin" id="url_linkedin" value="{{ old('url_linkedin') }}" placeholder="le lien de la page linkedin" maxlength="250" required>
                                @error('url_linkedin')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            
                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">URL Chaine Whatsapp<strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="url" name="url_chaine_whatsapp" id="url_chaine_whatsapp"  value="{{ old('url_chaine_whatsapp') }}" placeholder="le lien de la chaine whatsapp" maxlength="250" required>
                                @error('url_chaine_whatsapp')
                                    <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                @enderror
                            </div>
                            
                        </div>
                        
                    </div> 
        
         
                    <div class="d-flex flex-column mb-3">
                        <label class="d-flex text-sociprodd-bleuefoncee">Carte du pays<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" id="image_carte_pays" name="image_carte_pays" accept=".jpg,.jpeg,.png,.webp" required>
                        
                        @error('image_carte_pays')
                            <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            
            </form> 
            
        </div>
    </main>

@endsection
