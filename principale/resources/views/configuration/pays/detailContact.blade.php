@extends('layouts.layoutsConfiguration.action')





@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <div class="d-flex justify-content-start mb-5">

                <a href="{{ route('demande-contacts', ['IdPays' => $PaysPris->id_pays])}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                    retour
                </a>
            </div>
            
            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('includes.paysConfiguration.messageErrorSucces')



            <div class="row">
                <div class="col-lg-7 mt-3">
                    <h3>Détail de la demande de contact</h3>
                    <div class="d-flex flex-column gap-4 p-4 bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee">
                        <div class="d-flex gap-1">
                            <span>Nom et prénom :</span>
                            <strong>{{Crypt::decrypt($DemandeContactRecuperer->sujet)}}</strong>
                        </div>
                        <div class="d-flex gap-1">
                            <span>Adresse email :</span>
                            <strong>{{Crypt::decrypt($DemandeContactRecuperer->adresse_mail)}}</strong>
                        </div>
                        
                        <div class="d-flex gap-1">
                            <span>Sujet :</span>
                            <strong>{{Crypt::decrypt($DemandeContactRecuperer->sujet)}}</strong>
                        </div>

                        
                        <div class="d-flex flex-column gap-1">
                            <span>Message :</span>
                            <strong>{{Crypt::decrypt($DemandeContactRecuperer->message)}}</strong>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 mt-3">
                    <h3>Envoyer une réponse à l'utilisateur</h3>
                    
                    <form action="{{ route('detail-contact.reponse', ['IdPays' => $PaysPris->id_pays, 'IdContact' => $DemandeContactRecuperer->id_contact]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="d-flex flex-column p-4 bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee">
                            
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i>Envoyer la réponse!</button>
                            </div>
                            
    
                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">Message<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="message" id="message" style="resize: none; height: 200px;" maxlength="1500">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="text-sociprodd-jaune">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="d-flex text-sociprodd-bleuefoncee">Signature<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="signature" id="signature" style="resize: none; height: 100px;">
                                    Cordialement,
                                    {{ Crypt::decrypt($UtilisateurConnecter->nom_prenom) }} ({{ Crypt::decrypt($UtilisateurConnecter->poste) }})
                                    contact@sociprodd.org
                                    https://sociprodd.org/{{$PaysPris->nom_url}}
                                </textarea>
                                @error('signature')
                                    <div class="text-sociprodd-jaune">{{ $message }}</div>
                                @enderror
                            </div>
                        
                        </div>
                    </form>

                </div>
            </div>

 
        </div>
    </main>
       

@endsection