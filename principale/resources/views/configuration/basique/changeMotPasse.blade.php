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

	<title>SOCIPRODD Mot de Passe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="/paysSystemeConfig/public/systeme/css/sociproddBootstrap.css" rel="stylesheet">
    <link href="/paysSystemeConfig/public/systeme/css/sociproddPersonnalise.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body oncontextmenu="return false;" oncopy="return false;" oncut="return false;" onpaste="return false;" >


		<main class="d-flex w-100 mb-5">
			<div class="container d-flex flex-column">
				
				<!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
				@include('inclusions.messageErrorSucces')
                
				<div class="row vh-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">
						
                            <div class="d-flex justify-content-start mb-5">
                    
                                <a href="{{route('connexion')}}" class="text-sociprodd-blanc bg-sociprodd-bleuefoncee p-2 px-3 br-sociprodd-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                                    retour
                                </a>
                            </div>
                            
							<div class="text-center mt-2">
								<h1 class="h2">Changer le mot de passe de votre compte SOCIPRODD</h1>
							</div>

							<div class="card br-sociprodd-2 bg-sociprodd-bleuefoncee">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
										</div>
										<form action="{{route('change-mot-passe.token')}}" method="POST" class="mt-4">
											@csrf
										
											<div class="d-flex flex-column">
												<label class="d-flex text-sociprodd-blanc">Adresse mail <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
												<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="entrer votre adresse mail" minlength="10" maxlength="250" required>
												@error('email')
													<div class="text-sociprodd-jaune">{{ $message }}</div>
												@enderror
											</div>


											<div class="text-center mt-4">
												<button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Demande un changement!</button>
											</div>
											
											
										</form>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>


        
        
	
    <script src="/paysSystemeConfig/public/systeme/js/sociprodd.js"></script>
	

</body>

</html>