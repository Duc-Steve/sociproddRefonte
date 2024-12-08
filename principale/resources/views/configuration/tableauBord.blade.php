@extends('layouts.app')

@section('content')



        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="mb-3">Tableau de bord </h1>

                <div class="d-flex flex-column gap-5">
                    <div class="row">
                        <div class="col-lg-3 mt-3">
                            <div class="card-body d-flex justify-content-center br-sociprodd-1 bg-sociprodd-bleuefoncee p-3 py-5">
                                <div class="d-flex gap-3">
                                    <div class="col-auto">
                                        <div class="stat text-sociprodd-blanc">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M16 2L21 7V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918C3 2.44405 3.44495 2 3.9934 2H16ZM12 11.5C13.3807 11.5 14.5 10.3807 14.5 9C14.5 7.61929 13.3807 6.5 12 6.5C10.6193 6.5 9.5 7.61929 9.5 9C9.5 10.3807 10.6193 11.5 12 11.5ZM7.52746 17H16.4725C16.2238 14.75 14.3163 13 12 13C9.68372 13 7.77619 14.75 7.52746 17Z"></path></svg>
                                        </div>
                                    </div>

                                    <div class="col mt-0 d-flex flex-column gap-2">
                                        <strong class="text-sociprodd-blanc" style="font-size: 16px;">Newsletters</strong>
                                        <h1 class="text-sociprodd-blanc">{{$newsletterNombre}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card-body d-flex justify-content-center br-sociprodd-1 bg-sociprodd-bleuefoncee p-3 py-5">
                                <div class="d-flex gap-3">

                                    <div class="col-auto">
                                        <div class="stat text-sociprodd-blanc">										
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M13 14.0619V22H4C4 17.5817 7.58172 14 12 14C12.3387 14 12.6724 14.021 13 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM17.7929 19.9142L21.3284 16.3787L22.7426 17.7929L17.7929 22.7426L14.2574 19.2071L15.6716 17.7929L17.7929 19.9142Z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="col mt-0 d-flex flex-column gap-2">
                                        <strong class="text-sociprodd-blanc" style="font-size: 16px;">Contacts</strong>
                                        <h1 class="text-sociprodd-blanc">{{$ContactNombreDemande}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card-body d-flex justify-content-center br-sociprodd-1 bg-sociprodd-bleuefoncee p-3 py-5">
                                <div class="d-flex gap-3">

                                    <div class="col-auto">
                                        <div class="stat text-sociprodd-blanc">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M16 2L21 7V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918C3 2.44405 3.44495 2 3.9934 2H16ZM15 11V10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10V11H8V16H16V11H15ZM13 11H11V10C11 9.44772 11.4477 9 12 9C12.5523 9 13 9.44772 13 10V11Z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="col mt-0 d-flex flex-column gap-2">
                                        <strong class="text-sociprodd-blanc" style="font-size: 16px;">Pays</strong>
                                        <h1 class="text-sociprodd-blanc">{{$NombrePays}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 mt-3">
                            <div class="card-body d-flex justify-content-center br-sociprodd-1 bg-sociprodd-bleuefoncee p-3 py-5">
                                <div class="d-flex gap-3">

                                    <div class="col-auto">
                                        <div class="stat text-sociprodd-blanc">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M2.5 7C2.5 9.20914 4.29086 11 6.5 11C8.70914 11 10.5 9.20914 10.5 7C10.5 4.79086 8.70914 3 6.5 3C4.29086 3 2.5 4.79086 2.5 7ZM2 21V16.5C2 14.0147 4.01472 12 6.5 12C8.98528 12 11 14.0147 11 16.5V21H2ZM17.5 11C15.2909 11 13.5 9.20914 13.5 7C13.5 4.79086 15.2909 3 17.5 3C19.7091 3 21.5 4.79086 21.5 7C21.5 9.20914 19.7091 11 17.5 11ZM13 21V16.5C13 14.0147 15.0147 12 17.5 12C19.9853 12 22 14.0147 22 16.5V21H13Z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="col mt-0 d-flex flex-column gap-2">
                                        <strong class="text-sociprodd-blanc" style="font-size: 16px;">Utilisateur</strong>
                                        <h1 class="text-sociprodd-blanc">{{$UtilisateurNombre}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>

            </div>
        </main>
       
            		
@endsection