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

	<title>SOCIPRODD {{Crypt::decrypt($PaysPris->nom_normale)}}</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet"/>
    
    @yield('plugins_css')
    

    <link href="/principale/public/systeme/css/sociproddBootstrap.css" rel="stylesheet">
    <link href="/principale/public/systeme/css/sociproddPersonnalise.css" rel="stylesheet">

    @yield('rafraichir_automatiquement')
    
    @yield('css_tableau')
    
    @yield('style_css')
    
</head>

<body oncontextmenu="return true;" oncopy="return true;" oncut="return false;" onpaste="return true;" >


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
                    
                    @if($UtilisateurConnecter->type_utilisateur == "representant")  
                        <div class="d-flex justify-content-start m-1 mb-3">
                            <div class="d-flex flex-column gap-1">
                                <span class="text-sociprodd-blanc p-1">Mot de passe expire dans : </span>
                                <span id="countdown" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee br-sociprodd-1 text-center p-1 px-3"></span>
                            </div>
                        </div>
                    @endif
            
                    <ul class="sidebar-nav mb-3">
                        
                            
                            
                            <li class="sidebar-header mb-2">
                                Pays ({{Crypt::decrypt($PaysPris->nom_normale)}})
                                <a href="https://pays.sociprodd.org/{{$PaysPris->nom_url}}" target="_blank"
                                    class="bg-sociprodd-jaune br-sociprodd-1 p-1 pb-2 me-2 text-sociprodd-bleuefoncee">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 22H4C3.44772 22 3 21.5523 3 21V8H21V21C21 21.5523 20.5523 22 20 22ZM21 6H3V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V6ZM7 11V15H11V11H7ZM7 17V19H17V17H7ZM13 12V14H17V12H13Z"></path></svg>
                                </a>
                            </li>

                        @if(isset($BordPaysExist))
                            <li class="sidebar-item active mb-1">
                        @else
                            <li class="sidebar-item mb-1">
                        @endif
                                <a class="sidebar-link" href="{{ route('bilan-pays', ['IdPays' => $PaysPris->id_pays])}}">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M19 22H5C3.34315 22 2 20.6569 2 19V3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V15H22V19C22 20.6569 20.6569 22 19 22ZM18 17V19C18 19.5523 18.4477 20 19 20C19.5523 20 20 19.5523 20 19V17H18ZM16 20V4H4V19C4 19.5523 4.44772 20 5 20H16ZM6 7H14V9H6V7ZM6 11H14V13H6V11ZM6 15H11V17H6V15Z"></path></svg>
                                    <span class="align-middle">Bilan du pays</span>
                                </a>
            
                            </li>
                            

                        @if(isset($InterfacePaysExist))
                            <li class="sidebar-item active mb-1">
                        @else
                            <li class="sidebar-item mb-1">
                        @endif
                                <a class="sidebar-link" href="{{ route('detail-interface', ['IdPays' => $PaysPris->id_pays])}}">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M18 8H20C20.5523 8 21 8.44772 21 9V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V9C3 8.44772 3.44772 8 4 8H6V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8ZM11 15.7324V18H13V15.7324C13.5978 15.3866 14 14.7403 14 14C14 12.8954 13.1046 12 12 12C10.8954 12 10 12.8954 10 14C10 14.7403 10.4022 15.3866 11 15.7324ZM16 8V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V8H16Z"></path></svg>
                                    <span class="align-middle">Configuration du pays</span>
                                </a>
            
                            </li>

                            
                        @if(isset($SousExecutifExist))
                            <li class="sidebar-item active mb-1">
                        @else
                            <li class="sidebar-item mb-1">
                        @endif
                                <a class="sidebar-link" href="{{ route('gestion-sous-membres-executif', ['IdPays' => $PaysPris->id_pays])}}">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M3.78307 2.82598L12 1L20.2169 2.82598C20.6745 2.92766 21 3.33347 21 3.80217V13.7889C21 15.795 19.9974 17.6684 18.3282 18.7812L12 23L5.6718 18.7812C4.00261 17.6684 3 15.795 3 13.7889V3.80217C3 3.33347 3.32553 2.92766 3.78307 2.82598ZM12 11C13.3807 11 14.5 9.88071 14.5 8.5C14.5 7.11929 13.3807 6 12 6C10.6193 6 9.5 7.11929 9.5 8.5C9.5 9.88071 10.6193 11 12 11ZM7.52746 16H16.4725C16.2238 13.75 14.3163 12 12 12C9.68372 12 7.77619 13.75 7.52746 16Z"></path></svg>
                                    <span class="align-middle">Sous membres exécutif</span>
                                </a>
            
                            </li>

                        @if(Crypt::decrypt($InterfacePaysRecuperer->video) == "true" || 
                            Crypt::decrypt($InterfacePaysRecuperer->image_dynamique) == "true" || 
                            Crypt::decrypt($InterfacePaysRecuperer->image_statique) == "true" ||  
                            Crypt::decrypt($InterfacePaysRecuperer->projet) == "true" ||  
                            Crypt::decrypt($InterfacePaysRecuperer->actualite) == "true" ||  
                            Crypt::decrypt($InterfacePaysRecuperer->podcast) == "true" ||  
                            Crypt::decrypt($InterfacePaysRecuperer->reportage) == "true" ) 
                            
                            @if(isset($ElementPaysExist))
                                <li class="sidebar-item active mb-1">
                            @else
                                <li class="sidebar-item mb-1">
                            @endif
                                    <a class="sidebar-link" href="{{ route('contenu-elements', ['IdPays' => $PaysPris->id_pays])}}">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M21 9.5V12.5C21 14.9853 16.9706 17 12 17C7.02944 17 3 14.9853 3 12.5V9.5C3 11.9853 7.02944 14 12 14C16.9706 14 21 11.9853 21 9.5ZM3 14.5C3 16.9853 7.02944 19 12 19C16.9706 19 21 16.9853 21 14.5V17.5C21 19.9853 16.9706 22 12 22C7.02944 22 3 19.9853 3 17.5V14.5ZM12 12C7.02944 12 3 9.98528 3 7.5C3 5.01472 7.02944 3 12 3C16.9706 3 21 5.01472 21 7.5C21 9.98528 16.9706 12 12 12Z"></path></svg>
                                        <span class="align-middle">Gestion éléménts</span>
                                    </a>
                
                                </li>
                        @endif

                          
                        @if(Crypt::decrypt($InterfacePaysRecuperer->coordonnee) == "true")   
                            @if(isset($CoordonneePaysExist))
                                <li class="sidebar-item active mb-1">
                            @else
                                <li class="sidebar-item mb-1">
                            @endif
                                    <a class="sidebar-link" href="{{ route('nos-coordonnees', ['IdPays' => $PaysPris->id_pays])}}">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 9.5C12.8284 9.5 13.5 8.82843 13.5 8C13.5 7.17157 12.8284 6.5 12 6.5C11.1716 6.5 10.5 7.17157 10.5 8C10.5 8.82843 11.1716 9.5 12 9.5ZM14 15H13V10.5H10V12.5H11V15H10V17H14V15Z"></path></svg>
                                        <span class="align-middle">Coordonnees </span>
                                    </a>
                
                                </li>
                        @endif

                            
                            
                        @if(Crypt::decrypt($InterfacePaysRecuperer->newsletter) == "true") 
                            
                            @if(isset($NewsletterOptionExist))
                                <li class="sidebar-item active mb-1">
                            @else
                                <li class="sidebar-item mb-1">
                            @endif
                                    <a class="sidebar-link" href="{{ route('gestion-newsletters', ['IdPays' => $PaysPris->id_pays])}}">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M22 13.3414C21.3744 13.1203 20.7013 13 20 13C16.6863 13 14 15.6863 14 19C14 19.7013 14.1203 20.3744 14.3414 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V13.3414ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829ZM19 22L15.4645 18.4645L16.8787 17.0503L19 19.1716L22.5355 15.636L23.9497 17.0503L19 22Z"></path></svg>
                                        <span class="align-middle">Newsletters</span>
                                    </a>
                
                                </li>
                        @endif
                        
                        
                            
                        @if(Crypt::decrypt($InterfacePaysRecuperer->contact) == "true")  

                            @if(isset($ContactExist))
                                <li class="sidebar-item active mb-1">
                            @else
                                <li class="sidebar-item mb-1">
                            @endif
                                    <a class="sidebar-link" href="{{ route('demande-contacts', ['IdPays' => $PaysPris->id_pays])}}">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M18 2C18.5523 2 19 2.44772 19 3L19.0009 11.5286C17.9393 10.578 16.5371 10 15 10C11.6863 10 9 12.6863 9 16C9 19.2384 11.76 22 15 22H6C5.44772 22 5 21.5523 5 21V3C5 2.44772 5.44772 2 6 2H18ZM15 12C17.2091 12 19 13.7909 19 16C19 16.7418 18.7981 17.4365 18.4462 18.032L20.6569 20.2426L19.2426 21.6569L17.032 19.4462C16.4365 19.7981 15.7418 20 15 20C12.7909 20 11 18.2091 11 16C11 13.7909 12.7909 12 15 12ZM15 14C13.8954 14 13 14.8954 13 16C13 17.1046 13.8954 18 15 18C16.1046 18 17 17.1046 17 16C17 14.8954 16.1046 14 15 14Z"></path></svg>
                                        <span class="align-middle">Demande contacts</span>
                                    </a>
                
                                </li>
                        @endif
                        
                        
                            
                        @if(Crypt::decrypt($InterfacePaysRecuperer->commentaire) == "true")  

                            @if(isset($CommentaireOptionExist))
                                <li class="sidebar-item active mb-1">
                            @else
                                <li class="sidebar-item mb-1">
                            @endif
                                    <a class="sidebar-link" href="{{ route('gestion-commentaires', ['IdPays' => $PaysPris->id_pays])}}">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM11 13V15H13V13H11ZM11 7V12H13V7H11Z"></path></svg>
                                        <span class="align-middle">Commentaires</span>
                                    </a>
                
                                </li>
                        @endif
                        
                        @if($UtilisateurConnecter->type_utilisateur == "representant")   
                        
                            @if(isset($CompteExist))
                                <li class="sidebar-item active mb-1">
                            @else
                                <li class="sidebar-item mb-1">
                            @endif
                                    <a class="sidebar-link" href="{{ route('mon-compte', ['IdPays' => $PaysPris->id_pays])}}">
                                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M20 22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13Z"></path></svg>
                                        <span class="align-middle">Mon compte</span>
                                    </a>
                
                                </li>
                                
                        @endif
                                
                    </ul>


                    @if($UtilisateurConnecter->type_utilisateur != "representant")   
                        <div class="bg-sociprodd-bleueclaire br-sociprodd-1 p-3 m-2">
                            <div class="d-grid">          
                                <a href="{{route('pays.nos-pays')}}" class="d-flex justify-content-center text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                                    retour
                                </a>
                            </div>
                        </div>
                    @endif

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
                                    
                                    @if($UtilisateurConnecter->type_utilisateur == "representant")  
                                        <a class="dropdown-item text-sociprodd-blanc" href="{{ route('mon-compte', ['IdPays' => $PaysPris->id_pays])}}">
                                    @else    
                                        <a class="dropdown-item text-sociprodd-blanc" href="{{ route('utilisateur.mon-compte')}}">
                                    @endif
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
	
    @if($UtilisateurConnecter->type_utilisateur == "representant")  
	
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
    
    @endif

    @yield('jsScripts')
    
    @yield('js_tableau')
    
    @yield('js_infos_pays')
    

</body>
</html>


