@extends('layouts.action')



@section('css_tableau')
    @include('inclusions.tableau_css')
@endsection



@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            

            <!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
            @include('inclusions.messageErrorSucces')


            @if($nombreCommentairesListe > 0)

                <div class="col-lg-12 mt-3">
                    <h1 class="mb-3">Nos commentaires</h1>
                    
                        
                    <span class="mt-4 d-flex justify-content-end">
                        {{ $CommentairesListe->links() }}
                    </span>
                    <div class="row">
               
                        @foreach($CommentairesListe as $CommentairesListeIndividu)
                            <div class="col-lg-4 mt-3">
                            
                                <div class="p-2 d-flex flex-column gap-1 bg-sociprodd-blanc br-sociprodd-1 bdr-sociprodd-all-bleuefoncee">
                                    
                                    <h3>{{Crypt::decrypt($CommentairesListeIndividu->titre)}}</h3>
                                    <p>{{Crypt::decrypt($CommentairesListeIndividu->description)}}</p>
                                    
                                    <span>
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M6 4V8H18V4H20.0066C20.5552 4 21 4.44495 21 4.9934V21.0066C21 21.5552 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5551 3 21.0066V4.9934C3 4.44476 3.44495 4 3.9934 4H6ZM9 17H7V19H9V17ZM9 14H7V16H9V14ZM9 11H7V13H9V11ZM16 2V6H8V2H16Z"></path></svg>
                                        {{Crypt::decrypt($CommentairesListeIndividu->nom_prenom)}}
                                    </span>
                                    <span>
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M22 13.3414C21.3744 13.1203 20.7013 13 20 13C16.6863 13 14 15.6863 14 19C14 19.7013 14.1203 20.3744 14.3414 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V13.3414ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829ZM19 22L15.4645 18.4645L16.8787 17.0503L19 19.1716L22.5355 15.636L23.9497 17.0503L19 22Z"></path></svg>
                                        {{Crypt::decrypt($CommentairesListeIndividu->adresse_mail)}}
                                    </span>
                                
                                    <span>
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 8H4V19H20V8ZM15.0355 10.136L16.4497 11.5503L11.5 16.5L7.96447 12.9645L9.37868 11.5503L11.5 13.6716L15.0355 10.136Z"></path></svg>
                                        {{$CommentairesListeIndividu->created_at}}
                                    </span>
                                
                                    <div class="mt-2 d-flex justify-content-end gap-3">
                                        
                                        @if($CommentairesListeIndividu->statut_commentaire == "publier")
                                            <span class="bg-sociprodd-jaune br-sociprodd-1 text-sociprodd-bleuefoncee p-1 px-2">{{$CommentairesListeIndividu->statut_commentaire}}</span>
                                        @else
                                            <span class="bg-sociprodd-bleuefoncee br-sociprodd-1 text-sociprodd-blanc p-1 px-2">{{$CommentairesListeIndividu->statut_commentaire}}</span> 
                                        @endif
                                        
                                        <a href="{{ route('gestion-commentaires.enregistrer', ['IdPays' => $PaysPris->id_pays, 'IdCommentaire' => $CommentairesListeIndividu->id_commentaire]) }}">
                                            @if($CommentairesListeIndividu->statut_commentaire == "publier")
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
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        

                    </div>
                </div>

            @else
                <div class="d-flex justify-content-center">
                    
                    <h3>Cher utilisateur il n'existe pas de commentaire enregistrer</h3>
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
                "responsive": true, "autoWidth": false,
                "buttons": ["csv", "excel", "pdf"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            
        });
    </script>
@endsection


