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
    <link rel="apple-touch-icon" href="/paysSystemeConfig/public/systeme/img/sociproddLogo.png">
    
    <link rel="shortcut icon" href="/paysSystemeConfig/public/systeme/img/sociproddLogo.png"/>

	<title>SOCIPRODD</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet"/>
    
    @yield('plugins_css')

    
    <link href="/paysSystemeConfig/public/systeme/css/sociproddBootstrap.css" rel="stylesheet">
    <link href="/paysSystemeConfig/public/systeme/css/sociproddPersonnalise.css" rel="stylesheet">
    

    
    @yield('css_tableau')
    
    @yield('style_css')
    
</head>

<body oncontextmenu="return true;" oncopy="return true;" oncut="return false;" onpaste="return true;" >


    
    		<div class="main">
    
    
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


    <!--Plugins-->
    <script src="/paysSystemeConfig/public/assets/js/jquery.js"></script>
    <script src="/paysSystemeConfig/public/assets/js/plugins.js"></script>
    <!--Template functions-->
    <script src="/paysSystemeConfig/public/assets/js/functions.js"></script>
    
    <script src="/paysSystemeConfig/public/systeme/js/sociprodd.js"></script>
	

    @yield('jsScripts')
    
    @yield('js_tableau')
    
    @yield('js_infos_pays')
    

</body>
</html>


