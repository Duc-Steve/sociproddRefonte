@extends('layouts.layoutsConfiguration.action')



@section('css_tableau')
    @include('includes.paysConfiguration.tableau_css')
@endsection



@section('content')

    <main class="content">
        <div class="container-fluid p-0">


            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('includes.paysConfiguration.messageErrorSucces')

            @if($NombreNewsletter > 0)
    
    
                <div class="row">
                    <div class="col-lg-8 mt-3">
                        <h1 class="mb-3">Nos newsletters</h1>
                        <div class="p-2 bg-sociprodd-blanc bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee">
                            
                            <table id="example1" class="table table-bordered mt-3" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" 
                                data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">							
                                <thead>
                                    <tr class="bg-sociprodd-jaune text-sociprodd-bleuefoncee">
                                        <th scope="col" data-field="data" data-editable="true">
                                            Date enregistrement
                                        </th>
                                        <th scope="col" data-field="data" data-editable="true">
                                            Adresse mail
                                        </th>
                                        <th scope="col" data-field="data" data-editable="true">
                                            Pays
                                        </th>
                                        <th scope="col" data-field="data" data-editable="true">
                                            Statut
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($RecupererListeNewsletter as $RecupererListeNewsletterIndividu)
                                        <tr>
                                            
                                            <th>{{$RecupererListeNewsletterIndividu->created_at}}</th>
                                            <th>{{Crypt::decrypt($RecupererListeNewsletterIndividu->adresse_mail)}}</th>
                                            <th>{{Crypt::decrypt($RecupererListeNewsletterIndividu->nom_normale)}}</th>
                                            <th>
                                                @if($RecupererListeNewsletterIndividu->statut_newsletter == "activer")
                                                    <span class="bg-sociprodd-bleueclaire br-sociprodd-1 text-sociprodd-blanc p-1 px-2">{{$RecupererListeNewsletterIndividu->statut_newsletter}}</span>
                                                @else
                                                    <span class="bg-sociprodd-bleuefoncee br-sociprodd-1 text-sociprodd-blanc p-1 px-2">{{$RecupererListeNewsletterIndividu->statut_newsletter}}</span> 
                                                @endif
                                            </th>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
    
                        </div>
                    </div>
                    <div class="col-lg-4 mt-3">
                        
                        <h3>Partager un communiquer</h3>
        
                        <div class="bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee p-4">
                            <form action="{{ route('gestion-newsletters.publier', ['IdPays' => $PaysPris->id_pays])}}" method="POST">
                                @csrf
                                
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i>Diffuser</button>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Sujet<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="text" name="sujet" id="sujet" value="{{ old('sujet') }}" minlength="4" maxlength="250" placeholder="entrer le sujet" required>
                                    @error('sujet')
                                        <div class="text-sociprodd-jaune">{{ $message }}</div>
                                    @enderror
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
                                
        
                            </form>
                        </div>
                    </div>
                </div>
                
            @else
                <div class="d-flex justify-content-center">
                    
                    <h3>Cher utilisateur il n'existe pas de newsletter enregistrer</h3>
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

