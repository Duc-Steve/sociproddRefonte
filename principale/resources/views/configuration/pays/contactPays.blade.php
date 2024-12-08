@extends('layouts.action')




@section('rafraichir_automatiquement')
                
    <meta http-equiv="refresh" content="60">          

@endsection



@section('css_tableau')
    @include('inclusions.tableau_css')
@endsection



@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('inclusions.messageErrorSucces')

            @if($NombreContacts > 0)

                <div class="col-lg-12 mt-3">
                    <div class="nav nav-tabs mb-5 gap-3" id="nav-tab" role="tablist">
                        <button class="nav-link fw-semi-bold active" id="nav-non-vue-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-non-vue" type="button" role="tab" aria-controls="nav-non-vue"
                            aria-selected="true">Non vue</button>
                        <button class="nav-link fw-semi-bold" id="nav-vue-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-vue" type="button" role="tab" aria-controls="nav-vue"
                            aria-selected="false">Vue</button>
                    </div>
                    
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-non-vue" role="tabpanel" aria-labelledby="nav-non-vue-tab">
                        
                            <h1 class="mb-3">Nos demande de contact non vue</h1>
                            <div class="p-2 bg-sociprodd-blanc bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee">
                                
                                <table id="example1" class="table table-bordered mt-3" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" 
                                    data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">							
                                    <thead>
                                        <tr class="bg-sociprodd-jaune text-sociprodd-bleuefoncee">
                                            <th scope="col" data-field="data" data-editable="true">
                                                Voir
                                            </th>
                                            <th scope="col" data-field="data" data-editable="true">
                                                Date enregis.
                                            </th>
                                            <th scope="col" data-field="data" data-editable="true">
                                                Nom et prenom
                                            </th>
                                            <th scope="col" data-field="data" data-editable="true">
                                                Adresse mail
                                            </th>
                                            <th scope="col" data-field="data" data-editable="true">
                                                Sujet
                                            </th>
                                            <th scope="col" data-field="data" data-editable="true">
                                                Pays
                                            </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($RecupererListecontactsNonVue as $RecupererListecontactsNonVueIndividu)
                                            <tr>
                                                
                                                <th>
                                                                
                                                    <a href="{{ route('detail-contact', ['IdPays' => $PaysPris->id_pays, 'IdContact' => $RecupererListecontactsNonVueIndividu->id_contact]) }}"
                                                        class="bg-sociprodd-bleueclaire br-sociprodd-1 p-1 pb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)">
                                                            <path d="M1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 
                                                            17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12ZM12.0003 17C14.7617 17 17.0003 14.7614 17.0003 
                                                            12C17.0003 9.23858 14.7617 7 12.0003 7C9.23884 7 7.00026 9.23858 7.00026 12C7.00026 14.7614 9.23884 17 12.0003 
                                                            17ZM12.0003 15C10.3434 15 9.00026 13.6569 9.00026 12C9.00026 10.3431 10.3434 9 12.0003 9C13.6571 9 15.0003 
                                                            10.3431 15.0003 12C15.0003 13.6569 13.6571 15 12.0003 15Z"></path>
                                                        </svg>
                                                    </a>
                                                </th>
                                                <th>{{$RecupererListecontactsNonVueIndividu->created_at}}</th>
                                                <th>{{Crypt::decrypt($RecupererListecontactsNonVueIndividu->nom_prenom)}}</th>
                                                <th>{{Crypt::decrypt($RecupererListecontactsNonVueIndividu->adresse_mail)}}</th>
                                                <th>{{ Str::limit(Crypt::decrypt($RecupererListecontactsNonVueIndividu->sujet), 25, '...') }}</th>
                                                <th>{{Crypt::decrypt($RecupererListecontactsNonVueIndividu->nom_normale)}}</th>
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-vue" role="tabpanel" aria-labelledby="nav-vue-tab">
                         
                            @if($nombreListecontactsVue > 0)
                                <h1 class="mb-3">Nos demande de contact vue</h1>
                                
                                <div class="p-2 bg-sociprodd-blanc bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee">
                                    
                                    <table id="example1" class="table table-bordered mt-3" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" 
                                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">							
                                        <thead>
                                            <tr class="bg-sociprodd-jaune text-sociprodd-bleuefoncee">
                                                <th scope="col" data-field="data" data-editable="true">
                                                    Voir
                                                </th>
                                                <th scope="col" data-field="data" data-editable="true">
                                                    Date enregis.
                                                </th>
                                                <th scope="col" data-field="data" data-editable="true">
                                                    Nom et prenom
                                                </th>
                                                <th scope="col" data-field="data" data-editable="true">
                                                    Adresse mail
                                                </th>
                                                <th scope="col" data-field="data" data-editable="true">
                                                    Sujet
                                                </th>
                                                <th scope="col" data-field="data" data-editable="true">
                                                    Pays
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($ListecontactsVue as $ListecontactsVueIndividu)
                                                <tr>
                                                    
                                                    <th>
                                                        
                                                        <button id="DemandeContactVue" type="button" class="d-flex gap-2 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-1 br-sociprodd-1" 
                                                            data-bs-toggle="modal" data-bs-target="#demandeContactVue{{$ListecontactsVueIndividu->id_contact}}">
                                                            
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M16.6256 3.1285L9.29145 10.4626L9.29886 14.7098L13.537 14.7024L20.8682 7.37114C21.5912 8.75438 22 10.3278 22 11.9967C22 17.5196 17.5228 21.9967 12 21.9967C6.47715 21.9967 2 17.5196 2 11.9967C2 6.47386 6.47715 1.9967 12 1.9967C13.6689 1.9967 15.2423 2.40553 16.6256 3.1285ZM20.4853 2.09721L21.8995 3.51142L12.7071 12.7038L11.2954 12.7063L11.2929 11.2896L20.4853 2.09721Z"></path></svg>
                                                        
                                                        </button>
                                                            
                                                        <div class="modal fade bg-sociprodd-bleuefoncee" id="demandeContactVue{{$ListecontactsVueIndividu->id_contact}}" data-bs-backdrop="static" data-bs-keyboard="false">
                                                            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                                                                <div class="modal-content overflow-hidden bg-sociprodd-blanc">
                                                                    <div class="modal-body">    
                                                                        <div class="position-relative">
                                                                            <div class="position-absolute end-0 p-4">
                                                                                <button class="close btn-close bg-sociprodd-bleueclaire text-sociprodd-bleuefoncee bdr-sociprodd-all-bleueclaire" type="button" data-bs-dismiss="modal" aria-label="Close">
                                                                                    <span class="uil uil-times" aria-hidden="true"></span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                                
                                                                        <div class="mt-5 p-3">
                                                                            
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-lg-6 mt-3">
                                                                                    <div class="mb-3">
                                                                                        <span class="text-sociprodd-bleuefoncee">Responsable ayant pris en charge :</span>
                                                                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" value="{{Crypt::decrypt($ListecontactsVueIndividu->nom_prenom)}}" readonly>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <span class="text-sociprodd-bleuefoncee">Nom et prénom :</span>
                                                                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" value="{{Crypt::decrypt($ListecontactsVueIndividu->sujet)}}" readonly>
                                                                                    </div>
                                                                                    
                                                                                    <div class="mb-3">
                                                                                        <span class="text-sociprodd-bleuefoncee">Adresse email :</span>
                                                                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" value="{{Crypt::decrypt($ListecontactsVueIndividu->adresse_mail)}}" readonly>
                                                                                    </div>
                                                                                    
                                                                                    <div class="mb-3">
                                                                                        <span class="text-sociprodd-bleuefoncee">Sujet :</span>
                                                                                        <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" value="{{Crypt::decrypt($ListecontactsVueIndividu->sujet)}}" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 mt-3 ">
                                                                            
                                                                                    <div class="d-flex flex-column gap-1">
                                                                                        <span>Message :</span>
                                                                                        <strong>{{Crypt::decrypt($ListecontactsVueIndividu->message)}}</strong>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th>{{$ListecontactsVueIndividu->created_at}}</th>
                                                    <th>{{Crypt::decrypt($ListecontactsVueIndividu->nom_prenom)}}</th>
                                                    <th>{{Crypt::decrypt($ListecontactsVueIndividu->adresse_mail)}}</th>
                                                    <th>{{ Str::limit(Crypt::decrypt($ListecontactsVueIndividu->sujet), 25, '...') }}</th>
                                                    <th>{{Crypt::decrypt($ListecontactsVueIndividu->nom_normale)}}</th>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            @else 
                                <div class="d-flex justify-content-center">
                                    
                                    <h3>Aucune demande de contact vue</h3>
                                </div>

                            @endif

                        </div>
                        
                    </div>

                </div>

            @else
                <div class="d-flex justify-content-center">
                    
                    <h3>Cher utilisateur il n'existe pas de demande de contact enregistrer</h3>
                </div>
            @endif

        </div>
    </main>
       
@endsection



@section('js_tableau')
    @include('inclusions.tableau_js')
    
    <script>
      $(function () {
            $("#example1").DataTable({
                "responsive": true, "autoWidth": false
            }).container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            
        });
    </script>
@endsection

