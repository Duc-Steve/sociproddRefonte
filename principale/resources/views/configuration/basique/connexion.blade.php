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

	<title>SOCIPRODD Connexion</title>

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
						
							<div class="text-center mt-2">
								<h1 class="h2">Connectez-vous à votre compte SOCIPRODD</h1>
							</div>

							<div class="card br-sociprodd-2 bg-sociprodd-bleuefoncee">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
										</div>
										<form action="{{route('connexion.session')}}" method="POST" class="mt-4">
											@csrf
										
											<div class="d-flex flex-column">
												<label class="d-flex text-sociprodd-blanc">Adresse mail <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
												<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="entrer votre adresse mail" minlength="10" maxlength="250" required>
												@error('email')
													<div class="text-sociprodd-jaune">{{ $message }}</div>
												@enderror
											</div>
											

											<div class="mb-1 mt-3">
												<label class="d-flex text-sociprodd-blanc">Mot de passe <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
												<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee" type="password" name="password" id="password" minlength="4" maxlength="35" placeholder="entrer votre mot de passe" required>
												@error('password')
													<div class="text-sociprodd-jaune">{{ $message }}</div>
												@enderror
											</div>
											
											<a href="{{ route('change-mot-passe') }}" class="d-flex justify-content-end text-sociprodd-jaune p-1">Changer de mot de passe</a>
										
													
													
											<div class="mt-3">
												<label class="form-check">
													<input class="form-check-input" type="checkbox" name="remember">
													<span class="form-check-label text-sociprodd-blanc">se souvenir de moi!</span>
												</label>
											</div>


											<div class="text-center mt-4">
												<button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Connexion!</button>
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