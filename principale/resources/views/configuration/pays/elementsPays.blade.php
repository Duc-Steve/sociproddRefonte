@extends('layouts.action')


@section('css_tableau')
    @include('inclusions.tableau_css')
@endsection



@section('content')

    <main class="content">
        <div class="container-fluid p-0">

                <div class="d-flex justify-content-end mb-4 gap-4">
                    <a href="{{route('nouveau-element', ['IdPays' => $PaysPris->id_pays])}}" class="text-sociprodd-blanc br-sociprodd-1 bg-sociprodd-bleueclaire p-2 px-3">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path></svg> 
                        Nouvel élément
                    </a>
                </div>

            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('inclusions.messageErrorSucces')

            @if($NombreElementPays > 0)

                <div class="col-lg-12 mt-3">
                    <h1 class="mb-3">Nos éléments</h1>
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
                                        Date enregi.
                                    </th>
                                    <th scope="col" data-field="data" data-editable="true">
                                        Référence
                                    </th>
                                    <th scope="col" data-field="data" data-editable="true">
                                        Utilisateur
                                    </th>
                                    <th scope="col" data-field="data" data-editable="true">
                                        Titre
                                    </th>
                                    <th scope="col" data-field="data" data-editable="true">
                                        Type
                                    </th>
                                    <th scope="col" data-field="data" data-editable="true">
                                        Statut
                                    </th>
                                        
                                    <th scope="col" data-field="data" data-editable="true">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ListeElementsRecuperer as $ListeElementsRecupererIndividu)
                                    <tr>
                                            
                                        <th>
                                            <a href="{{route('detail-element-autre', ['IdPays' => $PaysPris->id_pays, 'IdElement' => $ListeElementsRecupererIndividu->id_element])}}" class="bg-sociprodd-bleueclaire br-sociprodd-1 p-1 pb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)">
                                                    <path d="M1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 
                                                    17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12ZM12.0003 17C14.7617 17 17.0003 14.7614 17.0003 
                                                    12C17.0003 9.23858 14.7617 7 12.0003 7C9.23884 7 7.00026 9.23858 7.00026 12C7.00026 14.7614 9.23884 17 12.0003 
                                                    17ZM12.0003 15C10.3434 15 9.00026 13.6569 9.00026 12C9.00026 10.3431 10.3434 9 12.0003 9C13.6571 9 15.0003 
                                                    10.3431 15.0003 12C15.0003 13.6569 13.6571 15 12.0003 15Z"></path>
                                                </svg>
                                            </a>
                                        </th>
                                        <th>{{$ListeElementsRecupererIndividu->created_at->format('Y-m-d')}}</th>
                                        <th>{{Crypt::decrypt($ListeElementsRecupererIndividu->reference_unique)}}</th>
                                        <th>{{Crypt::decrypt($ListeElementsRecupererIndividu->nom_prenom)}}</th>
                                        <th>{{ Str::limit(Crypt::decrypt($ListeElementsRecupererIndividu->titre), 20, '...') }}</th>
                                        <th>{{$ListeElementsRecupererIndividu->type_element}}</th>
                                        <th>
                                            @if($ListeElementsRecupererIndividu->statut_element == "en attente")
                                                <span class="bg-sociprodd-bleuefoncee br-sociprodd-1 text-sociprodd-blanc p-1 pb-2 px-2">{{$ListeElementsRecupererIndividu->statut_element}}</span> 
                                            @elseif($ListeElementsRecupererIndividu->statut_element == "publier")
                                                <span class="bg-sociprodd-vert br-sociprodd-1 text-sociprodd-blanc p-1 pb-2 px-2">{{$ListeElementsRecupererIndividu->statut_element}}</span> 
                                            @elseif($ListeElementsRecupererIndividu->statut_element == "supprimer")
                                                <span class="bg-sociprodd-rouge br-sociprodd-1 text-sociprodd-blanc p-1 pb-2 px-2">{{$ListeElementsRecupererIndividu->statut_element}}</span> 
                                            @endif
                                        </th>
                                        
                                        <th>
                                            
                                            <button type="button" class="d-flex gap-2 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-1 br-sociprodd-1" 
                                                data-bs-toggle="modal" data-bs-target="#statutElement{{$ListeElementsRecupererIndividu->id_element}}">
                                                
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M16.6256 3.1285L9.29145 10.4626L9.29886 14.7098L13.537 14.7024L20.8682 7.37114C21.5912 8.75438 22 10.3278 22 11.9967C22 17.5196 17.5228 21.9967 12 21.9967C6.47715 21.9967 2 17.5196 2 11.9967C2 6.47386 6.47715 1.9967 12 1.9967C13.6689 1.9967 15.2423 2.40553 16.6256 3.1285ZM20.4853 2.09721L21.8995 3.51142L12.7071 12.7038L11.2954 12.7063L11.2929 11.2896L20.4853 2.09721Z"></path></svg>
                                            
                                            </button>
                                                
                                            <div class="modal fade bg-sociprodd-bleuefoncee" id="statutElement{{$ListeElementsRecupererIndividu->id_element}}" data-bs-backdrop="static" data-bs-keyboard="false">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
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
                                                                <form action="{{ route('detail-element-autre.change-statut', ['IdPays' => $PaysPris->id_pays , 'IdElement' => $ListeElementsRecupererIndividu->id_element])}}" method="POST">
                                                                    @csrf 
                                                                    
                                                                    <h3 class="mb-3">{{Crypt::decrypt($ListeElementsRecupererIndividu->titre)}}</h3>
  
                                                                    <div class="mb-3">
                                                                        <label class="d-flex text-sociprodd-bleuefoncee">Statut du element<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                                                        <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="statut_element" id="statut_element" required>

                                                                            @if($ListeElementsRecupererIndividu->statut_element == "en attente")
                                                                                <option value="{{ $ListeElementsRecupererIndividu->statut_element }}" selected>{{ $ListeElementsRecupererIndividu->statut_element }}</option>
                                                                                <option value="supprimer">Supprimer</option>
                                                                                <option value="publier">Publier</option>
                                                                            @elseif($ListeElementsRecupererIndividu->statut_element == "publier")
                                                                                <option value="{{ $ListeElementsRecupererIndividu->statut_element }}" selected>{{ $ListeElementsRecupererIndividu->statut_element }}</option>
                                                                                <option value="en attente">En attente</option>
                                                                                <option value="supprimer">Supprimer</option>
                                                                            @elseif($ListeElementsRecupererIndividu->statut_element == "supprimer")
                                                                                <option value="{{ $ListeElementsRecupererIndividu->statut_element }}" selected>{{ $ListeElementsRecupererIndividu->statut_element }}</option>
                                                                                <option value="en attente">En attente</option>
                                                                                <option value="publier">Publier</option>
                                                                            @endif
                                                                            
                                                                        </select>
                                                                    </div>

                                                                    <div class="d-flex justify-content-end mt-4">
                                                                        <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i>Changer statut!</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            @else
                <div class="d-flex justify-content-center">
                    
                    <h3>Cher utilisateur il n'existe pas d'élements enregistrer</h3>
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



