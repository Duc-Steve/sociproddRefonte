@extends('layouts.app')


@section('css_tableau')
    @include('inclusions.tableau_css')
@endsection


@section('content')
    <main class="content">
        <div class="container-fluid p-0">


            <div class="col-lg-12 mt-3">
                <h1 class="mb-3">Activités des utilisateurs</h1>
                <div class="p-2 bg-sociprodd-blanc bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee">
                    
                    <table id="example1" class="table table-bordered mt-3" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" 
                        data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">							
                        <thead>
                            <tr class="bg-sociprodd-jaune text-sociprodd-bleuefoncee">
                                <th scope="col" data-field="data" data-editable="true">
                                    Date
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Nom de table
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Id table
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Action
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Ancien
                                </th>
                                <th scope="col" data-field="data" data-editable="true">
                                    Nouveau
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listeActivite as $listeActiviteIndividu)
                            @php
                                $oldData = json_decode($listeActiviteIndividu->old_data, true);
                                $newData = json_decode($listeActiviteIndividu->new_data, true);
                            @endphp
                            <tr>
                                <th>{{ $listeActiviteIndividu->action_date }}</th>
                                <th>{{ $listeActiviteIndividu->table_name }}</th>
                                <th>{{ $listeActiviteIndividu->record_id }}</th>
                                <th>{{ $listeActiviteIndividu->action }}</th>

                                @if($listeActiviteIndividu->table_name == "interfaces")
                                    <th>********</th>
                                    <th>********</th>

                                @elseif($listeActiviteIndividu->table_name == "pays")
                                    @php
                                        // Décryptage des données
                                        $oldNom = isset($oldData['nom_normale']) ? Crypt::decrypt($oldData['nom_normale']) : 'N/A';
                                        $newNom = isset($newData['nom_normale']) ? Crypt::decrypt($newData['nom_normale']) : 'N/A';
                                    @endphp
                                    <th>{{ $oldNom }}</th>
                                    <th>{{ $newNom }}</th>

                                @else
                                    <th>********</th>
                                    <th>********</th>
                                @endif
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



