@extends('layouts.app')


@section('css_tableau')
    @include('inclusions.tableau_css')
@endsection


@section('content')
    <main class="content">
        <div class="container-fluid p-0">


            <div class="col-lg-12 mt-3">
                <h1 class="mb-3">Nos connexions</h1>
                <div class="p-2 bg-sociprodd-blanc bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee">
                    
                    <table id="example1" class="table table-bordered mt-3" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" 
                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">							
                        <thead>
                            <tr class="bg-sociprodd-jaune text-sociprodd-bleuefoncee">
                                <th scope="col" data-field="data" data-editable="true">Date connexion</th>
                                <th scope="col" data-field="data" data-editable="true">Utilisateur</th>
                                <th scope="col" data-field="data" data-editable="true">Adresse IP</th>
                                <th scope="col" data-field="data" data-editable="true">Appareil</th>
                                <th scope="col" data-field="data" data-editable="true">Navigateur</th>
                                <th scope="col" data-field="data" data-editable="true">S- Exploitation</th>
                                <th scope="col" data-field="data" data-editable="true">Sécurité</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listeConnexion as $listeConnexionIndividu)
                                @php
                                    $systemeDexploitationData = json_decode($listeConnexionIndividu->systeme_exploitation, true);
                                    $navigateurData = json_decode($listeConnexionIndividu->navigateur, true);
                                    $appareilData = json_decode($listeConnexionIndividu->appareil, true);
                                @endphp
                                <tr>
                                    <th>{{ $listeConnexionIndividu->created_at }}</th>
                                    <th>{{ Crypt::decrypt($listeConnexionIndividu->nom_prenom) }} <br> {{ $listeConnexionIndividu->type_utilisateur }}</th>
                                    <th>{{ Crypt::decrypt($listeConnexionIndividu->ip_address) }}</th>
                                     
                                    <th>  
                                            {{Crypt::decrypt($appareilData['type_appareil'])}}<br>
                                            {{Crypt::decrypt($appareilData['marque_appareil'])}}<br>
                                            {{Crypt::decrypt($appareilData['model_appareil'])}}

                                    </th>  
                                    <th>  
                                            {{Crypt::decrypt($navigateurData['type_navigateur'])}}<br>
                                            {{Crypt::decrypt($navigateurData['version_navigateur'])}}

                                    </th>
                                    <th>  
                                            {{Crypt::decrypt($systemeDexploitationData['type_systeme_dexploitation'])}}<br>
                                            {{Crypt::decrypt($systemeDexploitationData['version_systeme_dexploitation'])}}

                                    </th>
                                    <th>{{ Crypt::decrypt($listeConnexionIndividu->securite) }}</th>
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



