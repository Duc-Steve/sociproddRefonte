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

	<title>SOCIPRODD Nouveau mot de passe</title>

    <link href="/paysSystemeConfig/public/systeme/css/sociproddBootstrap.css" rel="stylesheet">
    <link href="/paysSystemeConfig/public/systeme/css/sociproddPersonnalise.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body oncontextmenu="return false;" oncopy="return false;" oncut="return false;" onpaste="return false;" >


		<main class="d-flex w-100 mb-5">
			<div class="container d-flex flex-column">
					
				<!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
				@include('includes.paysConfiguration.messageErrorSucces')
					
				<div class="row vh-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">
						
							<div class="text-center mt-2">
								<h1 class="h2">Créer un nouveau mot de passe de votre compte SOCIPRODD</h1>
							</div>
							
							<div class="card br-sociprodd-2 bg-sociprodd-bleuefoncee">
								<div class="card-body">
									<div class="m-sm-4">
										<div class="text-center">
											<img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
										</div>
										<form action="{{route('nouveau-mot-passe', ['TokenSecurite' => $token]) . '?email=' . urlencode($email)}}" method="POST" class="mt-4">
											@csrf
										

											<div class="mb-3 mt-3">
												<label class="d-flex text-sociprodd-blanc">Nouveau mot de passe <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
												<input class="form-control form-control-lg br-sociprodd-1" type="password" name="password" id="password" minlength="4" maxlength="35" placeholder="entrer votre mot de passe" required>
												@error('password')
													<div class="text-sociprodd-jaune">{{ $message }}</div>
												@enderror
											</div>
											
											<div class="mb-3 mt-3">
												<label class="d-flex text-sociprodd-blanc">Confirmer le mot de passe <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
												<input class="form-control form-control-lg br-sociprodd-1" type="password" name="verifipassword" id="verifipassword" minlength="4" maxlength="35" placeholder="entrer votre mot de passe" required>
												@error('verifipassword')
													<div class="text-sociprodd-jaune">{{ $message }}</div>
												@enderror
											</div>

											<div class="text-center mt-5">
												<button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Enregistrer le nouveau!</button>
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