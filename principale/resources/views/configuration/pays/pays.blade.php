@extends('layouts.layoutsConfiguration.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Listes des pays</title>
                

@endsection



@section('rafraichir_automatiquement')
                
    <meta http-equiv="refresh" content="30">          

@endsection


@section('css_tableau')
    @include('includes.paysConfiguration.tableau_css')
@endsection


@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            
            
            @if($UtilisateurConnecter->type_utilisateur == "administrateur")

                <div class="d-flex justify-content-end mb-4 gap-4">
                    <a href="{{route('pays.nouveau-pays')}}" class="text-sociprodd-blanc br-sociprodd-1 bg-sociprodd-bleueclaire p-2 px-3">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path></svg> 
                        Nouveau pays
                    </a>
                </div>
                
            @endif

            @if($NombrePays > 0)
                
                <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
                @include('includes.paysConfiguration.messageErrorSucces')
            
                <h1 class="mb-3">Nos pays</h1>
                <div class="col-lg-12 p-2 bg-sociprodd-blanc bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee">
                    
                    <table id="example1" class="table table-bordered mt-3" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" 
                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">							
                        <thead>
                            <tr class="bg-sociprodd-jaune text-sociprodd-bleuefoncee">
                                <th scope="col" data-field="data" data-editable="true">
                                    Voir
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Site
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Date d'enregis.
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Utilisateur
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Nom Correcte
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Code
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
                            @foreach($RecupererListePays as $RecupererListePaysIndividu)
                                <tr>
                                    
                                    <th>
                                        <a href="{{ route('bilan-pays', ['IdPays' => $RecupererListePaysIndividu->id_pays]) }}" target="_blank"
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
                                    <th>    
                                        <a href="https://pays.sociprodd.org/{{$RecupererListePaysIndividu->nom_url}}" target="_blank"
                                            class="bg-sociprodd-bleuefoncee br-sociprodd-1 p-1 pb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M20 22H4C3.44772 22 3 21.5523 3 21V8H21V21C21 21.5523 20.5523 22 20 22ZM21 6H3V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V6ZM7 11V15H11V11H7ZM7 17V19H17V17H7ZM13 12V14H17V12H13Z"></path></svg>
                                        </a>
                                    </th>
                                    <th>{{$RecupererListePaysIndividu->created_at}}</th>
                                    <th>{{Crypt::decrypt($RecupererListePaysIndividu->nom_prenom)}}</th>
                                    <th>{{Crypt::decrypt($RecupererListePaysIndividu->nom_normale)}}</th>
                                    <th>{{Crypt::decrypt($RecupererListePaysIndividu->code_pays)}}</th>
                                    <th>
                                        @if($RecupererListePaysIndividu->statut_pays == "actif")
                                            <span class="bg-sociprodd-bleueclaire br-sociprodd-1 text-sociprodd-blanc p-1 px-2">{{$RecupererListePaysIndividu->statut_pays}}</span>
                                        @else
                                            <span class="bg-sociprodd-bleuefoncee br-sociprodd-1 text-sociprodd-blanc p-1 px-2">{{$RecupererListePaysIndividu->statut_pays}}</span> 
                                        @endif
                                    </th>
                                    
                                    <th>
                                        @if($UtilisateurConnecter->id_utilisateur == $RecupererListePaysIndividu->utilisateur_id)
                                            <a href="{{ route('pays.change-statut-pays', ['IdPays' => $RecupererListePaysIndividu->id_pays]) }}">
                                                @if($RecupererListePaysIndividu->statut_pays == "actif")
                                                    <span class="bg-sociprodd-rouge br-sociprodd-1 p-1 pb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)">
                                                            <path d="M17 6H22V8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8H2V6H7V3C7 2.44772 
                                                            7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V6ZM9 11V17H11V11H9ZM13 11V17H15V11H13ZM9 4V6H15V4H9Z"></path>
                                                        </svg>
                                                    </span>
                                                @else
                                                    <span class="bg-sociprodd-vert br-sociprodd-1 p-1 pb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)">
                                                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 
                                                            17.5228 22 12 22ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path>
                                                        </svg>
                                                    </span>
                                                @endif
                                            </a>
                                        @else
                                            <span>-------</span>
                                        @endif
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            @else
                <div class="d-flex justify-content-center">
                    
                    <h3>Cher utilisateur il n'existe pas de pays enregistrer</h3>
                </div>
            @endif
        </div>
    </main>
       
@endsection



@section('js_tableau')
@include('includes.paysConfiguration.tableau_js')
    
    <script>
      $(function () {
            $("#example1").DataTable({
                "responsive": true, "autoWidth": false,
                "buttons": ["csv", "excel", "pdf"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            
        });
    </script>
@endsection

