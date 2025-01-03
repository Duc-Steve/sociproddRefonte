@extends('layouts.layoutsConfiguration.action')



@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            
        

            @if(!empty($PaysCoordonneeInfo))

                <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
                @include('includes.paysConfiguration.messageErrorSucces')


                <form action="{{ route('nos-coordonnees.mise-a-jour', ['IdPays' => $InterfacePaysRecuperer->pays_id])}}" method="POST" enctype="multipart/form-data">
                    @csrf  
                    <div class="d-flex justify-content-end mb-3">
                    
                        <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Mettre à jour!</button>
                    </div>
                    <div class="d-flex flex-column mt-4">
                        <h2 class="text-sociprodd-noir">Nos coordonnees </h2>
                        
                        <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                                
                        <div class="row">
                            <div class="col-lg-4 mt-3">
                                    
                                <div class="d-flex flex-column mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Numéros de téléphone</label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="text" id="numeros_contact" name="numeros_contact" value="{{Crypt::decrypt($PaysCoordonneeInfo->telephone)}}" required>
                                    
                                    @error('numeros_contact')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Numéros fixe</label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="text" id="numeros_fixe" name="numeros_fixe" value="{{Crypt::decrypt($PaysCoordonneeInfo->fixe)}}" required>
                                    
                                    @error('numeros_fixe')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                

                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Adresse mail </label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="email" name="email" id="email" value="{{Crypt::decrypt($PaysCoordonneeInfo->adresse_mail)}}" maxlength="250" required>
                                    @error('email')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                

                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Longitude</label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="text" name="longitude" id="longitude" value="{{Crypt::decrypt($PaysCoordonneeInfo->longitude)}}" maxlength="50" required>
                                    @error('longitude')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                

                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Latitude</label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="text" name="latitude" id="latitude" value="{{Crypt::decrypt($PaysCoordonneeInfo->latitude)}}" maxlength="50" required>
                                    @error('latitude')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Adresse (localisation) </label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="text" name="localisation" id="localisation" value="{{Crypt::decrypt($PaysCoordonneeInfo->localisation)}}" maxlength="150" required>
                                    @error('localisation')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-4 mt-3">

                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">URL Facebook</label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="url" name="url_facebook" id="url_facebook" value="{{Crypt::decrypt($PaysCoordonneeInfo->url_facebook)}}" maxlength="250" required>
                                    @error('url_facebook')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">URL Twitter</label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="url" name="url_twitter" id="url_twitter" value="{{Crypt::decrypt($PaysCoordonneeInfo->url_twitter)}}" maxlength="250" required>
                                    @error('url_twitter')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">URL Youtube</label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="url" name="url_youtube" id="url_youtube" value="{{Crypt::decrypt($PaysCoordonneeInfo->url_youtube)}}" maxlength="250" required>
                                    @error('url_youtube')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">URL Tiktok</label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="url" name="url_tiktok" id="url_tiktok" value="{{Crypt::decrypt($PaysCoordonneeInfo->url_tiktok)}}" maxlength="250" required>
                                    @error('url_tiktok')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">URL Linkedin</label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="url" name="url_linkedin" id="url_linkedin" value="{{Crypt::decrypt($PaysCoordonneeInfo->url_linkedin)}}" maxlength="250" required>
                                    @error('url_linkedin')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">URL Chaine Whatsapp </label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleuefoncee text-sociprodd-blanc" type="url" name="url_chaine_whatsapp" id="url_chaine_whatsapp" value="{{Crypt::decrypt($PaysCoordonneeInfo->url_chaine_whatsapp)}}" maxlength="250" required>
                                    @error('url_chaine_whatsapp')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                            
                            <div class="col-lg-4 mt-3">
                                <div class="d-flex flex-column mb-3">
                                    <div style="height: 320px;"> 
                                        <img alt="" src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($PaysCoordonneeInfo->image_carte_pays) }}" class="w-100 h-100">
                                    </div>
                                </div>
                            
                                <div class="d-flex flex-column mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">
                                        Changer de Carte du pays<strong class="px-1" style="color: #fdb913; font-size: 1.3em;">*</strong>
                                    </label>
                                    <input 
                                        class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" 
                                        type="file" 
                                        id="image_carte_pays" 
                                        name="image_carte_pays" accept=".jpg,.jpeg,.png,.webp"
                                    >
                                    
                                    @error('image_carte_pays')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div> 
                    </div>
                
                </form> 
                
            @else
            

                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ route('nouveau-coordonnee', ['IdPays' => $PaysPris->id_pays])}}" class="bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3 br-sociprodd-1">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path></svg> 
                        Nouveau coordonnee
                    </a>
                </div>


                <div class="d-flex justify-content-center">
                    
                    <h3>Cher utilisateur il n'existe pas de coordonner enregistrer pays</h3>
                </div>
                
            @endif
        </div>
    </main>

@endsection
