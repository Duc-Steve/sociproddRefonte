<?php
	use Illuminate\Support\Facades\Crypt;
    use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="fr" translate="no">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pays Config SOCIPRODD">
    <meta name="author" content="AMOSAG-Consulting">
	<meta name="keywords">

    <!-- PWA  -->
    <meta name="theme-color" content="#050A2E"/>
    <link rel="apple-touch-icon" href="/principale/public/systeme/img/sociproddLogo.png">
    
    <link rel="shortcut icon" href="/principale/public/systeme/img/sociproddLogo.png"/>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet"/>
    

    <link href="/principale/public/systeme/css/sociproddBootstrap.css" rel="stylesheet">
    <link href="/principale/public/systeme/css/sociproddPersonnalise.css" rel="stylesheet">

    @yield('optimisation')
    
    @yield('css_tableau')
    
    @yield('style_css')
    
</head>

<body oncontextmenu="return true;" oncopy="return true;" oncut="return false;" onpaste="return false;" >


        <div class="wrapper">
    
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content p-2 js-simplebar mb-5">
                    <div class="sidebar-brand d-flex justify-content-around m-1 mb-3 bg-sociprodd-bleueclaire br-sociprodd-1 p-1">
                        <a class="" href="https://sociprodd.org" target="_blank">
                            <img src="/principale/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="br-sociprodd-1" width="80px">
                        </a>
                        <div class="d-flex text-align-center pt-4">
                            <strong class="text-sociprodd-blanc">SOCIPRODD</strong>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-start m-1 mb-4">
                        <div class="d-flex flex-column gap-1">
                            <span class="text-sociprodd-blanc p-1">Mot de passe expire dans : </span>
                            <span id="countdown" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee br-sociprodd-1 text-center p-1 px-3"></span>
                        </div>
                    </div>
                
            
                    <ul class="sidebar-nav mt-5 mb-3">
            
                        @if(isset($TableauBordExist))
                            <li class="sidebar-item active mb-1">
                        @else
                            <li class="sidebar-item mb-1">
                        @endif
                                <a class="sidebar-link" href="{{ route('tableau-bord')}}">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M3 12C3 12.5523 3.44772 13 4 13H10C10.5523 13 11 12.5523 11 12V4C11 3.44772 10.5523 3 10 3H4C3.44772 3 3 3.44772 3 4V12ZM3 20C3 20.5523 3.44772 21 4 21H10C10.5523 21 11 20.5523 11 20V16C11 15.4477 10.5523 15 10 15H4C3.44772 15 3 15.4477 3 16V20ZM13 20C13 20.5523 13.4477 21 14 21H20C20.5523 21 21 20.5523 21 20V12C21 11.4477 20.5523 11 20 11H14C13.4477 11 13 11.4477 13 12V20ZM14 3C13.4477 3 13 3.44772 13 4V8C13 8.55228 13.4477 9 14 9H20C20.5523 9 21 8.55228 21 8V4C21 3.44772 20.5523 3 20 3H14Z"></path></svg>
                                    <span class="align-middle">Tableau de bord</span>
                                </a>
            
                            </li>
                                
                        @if($UtilisateurConnecter->type_utilisateur == "administrateur" || $UtilisateurConnecter->type_utilisateur == "comite")
                            
                            @if(isset($UtilisateurExist))
                                <li class="sidebar-item active mb-1">
                            @else
                                <li class="sidebar-item mb-1">
                            @endif
                                    <a class="sidebar-link" href="{{ route('utilisateur.nos-utilisateurs')}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M13 14.0619V22H4C4 17.5817 7.58172 14 12 14C12.3387 14 12.6724 14.021 13 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM17.7929 19.9142L21.3284 16.3787L22.7426 17.7929L17.7929 22.7426L14.2574 19.2071L15.6716 17.7929L17.7929 19.9142Z"></path></svg>
                                        <span class="align-middle">Gestion utilisateurs</span>
                                    </a>
                
                                </li>
                        @endif



                        @if(isset($PaysExist))
                            <li class="sidebar-item active mb-1">
                        @else
                            <li class="sidebar-item mb-1">
                        @endif
                                <a class="sidebar-link" href="{{ route('pays.nos-pays')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM16.0043 12.8777C15.6589 12.3533 15.4097 11.9746 14.4622 12.1248C12.6717 12.409 12.4732 12.7224 12.3877 13.2375L12.3636 13.3943L12.3393 13.5597C12.2416 14.2428 12.2453 14.5012 12.5589 14.8308C13.8241 16.1582 14.582 17.115 14.8116 17.6746C14.9237 17.9484 15.2119 18.7751 15.0136 19.5927C16.2372 19.1066 17.3156 18.3332 18.1653 17.3559C18.2755 16.9821 18.3551 16.5166 18.3551 15.9518V15.8472C18.3551 14.9247 18.3551 14.504 17.7031 14.1314C17.428 13.9751 17.2227 13.881 17.0582 13.8064C16.691 13.6394 16.4479 13.5297 16.1198 13.0499C16.0807 12.9928 16.0425 12.9358 16.0043 12.8777ZM12 3.83333C9.68259 3.83333 7.59062 4.79858 6.1042 6.34896C6.28116 6.47186 6.43537 6.64453 6.54129 6.88256C6.74529 7.34029 6.74529 7.8112 6.74529 8.22764C6.74488 8.55621 6.74442 8.8672 6.84992 9.09302C6.99443 9.40134 7.6164 9.53227 8.16548 9.64736C8.36166 9.68867 8.56395 9.73083 8.74797 9.78176C9.25405 9.92233 9.64554 10.3765 9.95938 10.7412C10.0896 10.8931 10.2819 11.1163 10.3783 11.1717C10.4286 11.1356 10.59 10.9608 10.6699 10.6735C10.7307 10.4547 10.7134 10.2597 10.6239 10.1543C10.0648 9.49445 10.0952 8.2232 10.268 7.75495C10.5402 7.01606 11.3905 7.07058 12.012 7.11097C12.2438 7.12589 12.4626 7.14023 12.6257 7.11976C13.2482 7.04166 13.4396 6.09538 13.575 5.91C13.8671 5.50981 14.7607 4.9071 15.3158 4.53454C14.3025 4.08382 13.1805 3.83333 12 3.83333Z"></path></svg>
                                
                                    <span class="align-middle">Gestion des pays</span>
                                </a>
            
                            </li>

                           
                        @if(isset($MissionExist))
                            <li class="sidebar-item active mb-1">
                        @else
                            <li class="sidebar-item mb-1">
                        @endif
                                <a class="sidebar-link" href="{{ route('missions.nos-missions')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM16.0043 12.8777C15.6589 12.3533 15.4097 11.9746 14.4622 12.1248C12.6717 12.409 12.4732 12.7224 12.3877 13.2375L12.3636 13.3943L12.3393 13.5597C12.2416 14.2428 12.2453 14.5012 12.5589 14.8308C13.8241 16.1582 14.582 17.115 14.8116 17.6746C14.9237 17.9484 15.2119 18.7751 15.0136 19.5927C16.2372 19.1066 17.3156 18.3332 18.1653 17.3559C18.2755 16.9821 18.3551 16.5166 18.3551 15.9518V15.8472C18.3551 14.9247 18.3551 14.504 17.7031 14.1314C17.428 13.9751 17.2227 13.881 17.0582 13.8064C16.691 13.6394 16.4479 13.5297 16.1198 13.0499C16.0807 12.9928 16.0425 12.9358 16.0043 12.8777ZM12 3.83333C9.68259 3.83333 7.59062 4.79858 6.1042 6.34896C6.28116 6.47186 6.43537 6.64453 6.54129 6.88256C6.74529 7.34029 6.74529 7.8112 6.74529 8.22764C6.74488 8.55621 6.74442 8.8672 6.84992 9.09302C6.99443 9.40134 7.6164 9.53227 8.16548 9.64736C8.36166 9.68867 8.56395 9.73083 8.74797 9.78176C9.25405 9.92233 9.64554 10.3765 9.95938 10.7412C10.0896 10.8931 10.2819 11.1163 10.3783 11.1717C10.4286 11.1356 10.59 10.9608 10.6699 10.6735C10.7307 10.4547 10.7134 10.2597 10.6239 10.1543C10.0648 9.49445 10.0952 8.2232 10.268 7.75495C10.5402 7.01606 11.3905 7.07058 12.012 7.11097C12.2438 7.12589 12.4626 7.14023 12.6257 7.11976C13.2482 7.04166 13.4396 6.09538 13.575 5.91C13.8671 5.50981 14.7607 4.9071 15.3158 4.53454C14.3025 4.08382 13.1805 3.83333 12 3.83333Z"></path></svg>
                                
                                    <span class="align-middle">Gestion des missions</span>
                                </a>
            
                            </li>
                            

                        @if(isset($SuivieActiviteExist))
                            <li class="sidebar-item active mb-1">
                        @else
                            <li class="sidebar-item mb-1">
                        @endif
                                <a class="sidebar-link" href="{{ route('suivie-activite.liste-activite')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M3.51472 2.10051L22.6066 21.1924L21.1924 22.6066L19.1782 20.5924C18.503 20.8556 17.7684 21 17 21H7C3.68629 21 1 18.3137 1 15C1 12.3846 2.67346 10.16 5.00804 9.33857C5.0027 9.22639 5 9.11351 5 9C5 8.22228 5.12683 7.47418 5.36094 6.77527L2.10051 3.51472L3.51472 2.10051ZM17 9C17.6983 9 18.3687 9.11928 18.992 9.33857C21.3265 10.16 23 12.3846 23 15C23 16.0883 22.7103 17.1089 22.2037 17.9889L14.0109 9.79638C14.891 9.28977 15.9117 9 17 9ZM12 2C15.242 2 17.9693 4.20399 18.7652 7.19539C18.1973 7.0675 17.6065 7 17 7C15.357 7 13.8297 7.49529 12.5592 8.34471L7.69418 3.48056C8.88169 2.55284 10.3763 2 12 2Z"></path></svg>
                                    <span class="align-middle">Suivie des activités</span>
                                </a>
            
                            </li>
                                
                            
                        @if(isset($CompteExist))
                            <li class="sidebar-item active mb-1">
                        @else
                            <li class="sidebar-item mb-1">
                        @endif
                                <a class="sidebar-link" href="{{ route('utilisateur.mon-compte')}}">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z"></path></svg>
                                    <span class="align-middle">Mon compte</span>
                                </a>
            
                            </li>
                            
                    </ul>

                </div>
            </nav>
    		<div class="main">
    
            
                <nav class="navbar navbar-expand navbar-light bg-sociprodd-blanc bdr-sociprodd-bleuefoncee-b bx-shadow-sociprodd-bleuefoncee">
                    
                    <span class="sidebar-toggle js-sidebar-toggle mx-2">
                        <i class="hamburger align-self-center"></i>
                    </span>  
                    <div class="navbar-collapse collapse d-flex">
                        <ul class="navbar-nav navbar-align">
                            
                            <li class="nav-item dropdown me-4">
                                <span class="nav-icon dropdown-toggle d-inline-block d-sm-none" data-bs-toggle="dropdown">
                                    <i class="align-middle me-2" data-feather="user"></i>
                                </span>
                
                                <!--affichier le nom du utilisateur connecter-->
                                <span class="nav-link dropdown-toggle d-none d-sm-inline-block" data-bs-toggle="dropdown">
                                    <span class="text-dark">{{Crypt::decrypt($UtilisateurConnecter->nom_prenom)}}</span>
                                </span>
                                <div class="dropdown-menu dropdown-menu-end bg-sociprodd-bleuefoncee">
                                    <a class="dropdown-item text-sociprodd-blanc" href="{{ route('utilisateur.mon-compte')}}">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z"></path></svg>
                                        Mon compte
                                    </a>
                                    <a class="dropdown-item text-sociprodd-blanc" href="{{route('deconnexion')}}">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V3C4 2.44772 4.44772 2 5 2ZM9 11V8L4 12L9 16V13H15V11H9Z"></path></svg>
                                        Déconnexion
                                    </a>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
                
                
    
                @yield('content')
                
                
            
                <a href="#" class="bg-sociprodd-bleuefoncee text-sociprodd-blanc rounded back-to-top p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="rgba(218,202,12,1)" viewBox="0 0 24 24">
                        <path d="M12.9999 7.82843V20H10.9999V7.82843L5.63589 13.1924L4.22168 11.7782L11.9999 4L19.778 11.7782L18.3638 13.1924L12.9999 7.82843Z"></path>
                    </svg>
                </a>

                
                <!--footer-->
                <footer class="footer mt-5">
                    <div class="container-fluid">
                        <div class="row text-muted br-sociprodd-1 py-2 bg-sociprodd-bleuefoncee">
                            <div class="col-6 text-start">
                                <p class="mb-0">
                                    <a class="text-sociprodd-blanc" href="" target="_blank">Copyright &copy; <strong class="text-sociprodd-jaune"><script>document.write(new Date().getFullYear());</script>SOCIPRODD</strong></a>
                                </p>
                            </div>
                            <div class="col-6 text-end text-sociprodd-blanc">
                                Conçu par <strong><a href="https://amosag.com" target="_blank" class="text-sociprodd-jaune">AMOSAG-Consulting</a></strong>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>

        </div>


    
    <script src="/principale/public/systeme/js/sociprodd.js"></script>
    
    <script>
        
        // Remplacez cette date par celle que vous obtenez du serveur
        var createdAt = new Date("{{ Crypt::decrypt($UtilisateurConnecter->date_password) }}");
    
        // Ajouter 3 mois à la date de création
        var expirer = new Date(createdAt);
        expirer.setMonth(expirer.getMonth() + 3);
    
        function updateCountdown() {
            var now = new Date();
            var timeRemaining = expirer - now;
        
            if (timeRemaining > 0) {
                var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
    
                document.getElementById("countdown").innerHTML = 
                    days + " jours " + 
                    hours + " h " + 
                    minutes + " mn " + 
                    seconds + " snd ";
            } else {
                document.getElementById("countdown").innerHTML = "Temps écoulé";
            }
        }
    
        // Mise à jour du compte à rebours toutes les secondes
        setInterval(updateCountdown, 1000);
    </script>
	

    @yield('jsScripts')
    
    @yield('js_tableau')
    
    @yield('js_infos_pays')
    

</body>
</html>


