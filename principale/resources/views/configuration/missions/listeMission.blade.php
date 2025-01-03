@extends('layouts.layoutsConfiguration.app')


<!-- Optimisation -->
@section('optimisation')
                
    <!-- Titre de la page -->
    <title>Listes des missions</title>
                

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
            

            
            @if($NombreMission < 6 && $UtilisateurConnecter->type_utilisateur == "administrateur")

                <div class="d-flex justify-content-end mb-4 gap-4">
                    <a href="{{route('missions.nouvelle-mission')}}" class="text-sociprodd-blanc br-sociprodd-1 bg-sociprodd-bleueclaire p-2 px-3">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM11 11H7V13H11V17H13V13H17V11H13V7H11V11Z"></path></svg> 
                        Nouvelle mission
                    </a>
                </div>
                
            @endif

            @if($NombreMission > 0)
                
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
                                    Date d'enregis.
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Utilisateur
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Nom Correcte
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
                            @foreach($RecupererListeMission as $RecupererListeMissionIndividu)
                                <tr>
                                    
                                    <th>{{$RecupererListeMissionIndividu->created_at}}</th>
                                    <th>{{Crypt::decrypt($RecupererListeMissionIndividu->nom_prenom)}}</th>
                                    <th>{{Crypt::decrypt($RecupererListeMissionIndividu->nom_mission)}}</th>
                                    <th>
                                        @if($RecupererListeMissionIndividu->statut_mission == "actif")
                                            <span class="bg-sociprodd-bleueclaire br-sociprodd-1 text-sociprodd-blanc p-1 px-2">{{$RecupererListeMissionIndividu->statut_mission}}</span>
                                        @else
                                            <span class="bg-sociprodd-bleuefoncee br-sociprodd-1 text-sociprodd-blanc p-1 px-2">{{$RecupererListeMissionIndividu->statut_mission}}</span> 
                                        @endif
                                    </th>
                                    
                                    <th>
                                        @if($UtilisateurConnecter->id_utilisateur == $RecupererListeMissionIndividu->utilisateur_id)
                                            <a href="">
                                                @if($RecupererListeMissionIndividu->statut_mission == "activer")
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
                    
                    <h3>Cher utilisateur il n'existe pas de missions enregistrer</h3>
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

