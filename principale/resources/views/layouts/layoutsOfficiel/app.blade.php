<?php
    use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="fr" translate="no">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SOCIPRODD">
    <meta name="author" content="AMOSAG-Consulting">
	<meta name="keywords">

    <!-- PWA  -->
    <meta name="theme-color" content="#050A2E"/>
    <link rel="apple-touch-icon" href="/principale/public/assets/images/Logo-SOCIPRODD.png">
    
    <link rel="shortcut icon" href="/principale/public/assets/images/Logo-SOCIPRODD.png"/>
    
    <!-- CSS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet"/>

    
    @yield('optimisation')
    
    @yield('style_css')

    <link rel="stylesheet" href="/principale/public/assets/css/sociproddBoot.css">
    
    <link rel="stylesheet" href="/principale/public/assets/css/addSociprodd.css">

    
</head>

<body oncontextmenu="return true;" oncopy="return false;" oncut="return false;" onpaste="return false;" >

  

    @yield('content')



 
    <!-- n'existe pas -->
    @if(!isset($newsletterDiv))  
        <!-- Newsletter -->
        <div style="position: relative; bottom: -3em;">
            <div class="mx-5 bg-sociprodd-bleuefoncee br-sociprodd-1 p-2 py-4 row">
                <div class="col-lg-6">
                    <h4 class="text-sociprodd-jaune">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="rgba(218,202,12,1)"><path d="M2 5.5V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5ZM0 10H5V12H0V10ZM0 15H8V17H0V15Z"></path></svg>
                        Newsletter
                    </h4>
                    <p class="text-sociprodd-blanc">Rejoignez-nous pour faire la différence ! Inscrivez-vous à notre lettre d'information pour rester informé sur notre organisation humanitaire et nos dons à impact.</p>
                
                </div>
                <div class="col-lg-6">
                    <form action="">
                        
                        <div class="newsletter_form">
                            <input type="email" id="email_newsletter" name="email_newsletter" placeholder="adresse mail" required>
                            <button type="submit">Inscription</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Newsletter -->
    @endif

    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="footer-item">
                        <a href="https://sociprodd.org">
                            <img src="/principale/public/assets/images/Logo-SOCIPRODD.png" alt="Logo" width="79px" height="79px">
                        </a>
                        <h4 class="text-sociprodd-jaune">SOCIPRODD</h4>
                        <p class="text-sociprodd-blanc mt-1"> Société Civile pour la Promotion des Droits et Devoirs</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-2">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Opportunités</h4>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Travailler avec nous</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> Devenir Partenaire</a>
                        <a href="{{ route('agir-avec-nous.devenir-membre') }}"><i class="fas fa-angle-right me-2"></i> Devenir membre</a>
                    </div>
                </div>



                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Heures d'ouverture</h4>
                        <p> 08.00 - 15.00 , Lundi - Samedi</p>
                        <p>
                            Notre équipe d’assistance est disponible 24 heures sur 24 et 7 jours sur 7 pour répondre à vos questions.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Contacts</h4>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt text-sociprodd-jaune me-3"></i>
                            <p class="text-white mb-0">Cameroun, Douala</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-sociprodd-jaune me-3"></i>
                            <p class="text-white mb-0">contact@sociprodd.org</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-sociprodd-jaune me-3"></i>
                            <p class="text-white mb-0">(+237) 694 53 98 93</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fa fa-phone-alt text-sociprodd-jaune me-3"></i>
                            <p class="text-white mb-0">(+237) 694 53 98 93</p>
                        </div>
                        <div class="d-flex">
                            <a class="bg-sociprodd-jaune rounded-circle p-1 px-2 me-1" href="https://www.facebook.com/Sociprodd?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f mx-2 text-sociprodd-bleuefoncee"></i></a>
                            <!-- a class="bg-sociprodd-jaune rounded-circle p-1 px-2 mx-1" href="" target="_blank"><i class="fab fa-twitter mx-1 text-sociprodd-bleuefoncee"></i></a>
                            <a class="bg-sociprodd-jaune rounded-circle p-1 px-2 mx-1" href="" target="_blank"><i class="fab fa-instagram mx-1 text-sociprodd-bleuefoncee"></i></a -->
                            <a class="bg-sociprodd-jaune rounded-circle p-1 px-2 ms-1" href="https://www.linkedin.com/company/sociprodd-officiel" target="_blank"><i class="fab fa-linkedin-in mx-1 text-sociprodd-bleuefoncee"></i></a>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    
    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <a href="" class="text-sociprodd-blanc">Politique de confidentialité</a>  
                    <span class="text-sociprodd-jaune"> | </span>
                    <a href="" class="text-sociprodd-blanc">Mentions légales</a>
                    <span class="text-sociprodd-jaune"> | </span> 
                    <a href="" class="text-sociprodd-blanc">Copyright</a>
                    <span class="text-sociprodd-jaune"> | </span>
                    <a href="" class="text-sociprodd-blanc">Conditions d'utilisation</a> 
                </div>
                <div class="col-md-6 text-center text-md-end text-body text-sociprodd-blanc">
                    &copy; <strong class="text-sociprodd-jaune"><script>document.write(new Date().getFullYear());</script> SOCIPRODD, tous droits réservés</strong>
                    Conçu par <strong><a href="https://amosag.com" target="_blank" class="text-sociprodd-jaune">AMOSAG-Consulting</a></strong>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3 rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


    @yield('jsScripts')
   

</body>
</html>


