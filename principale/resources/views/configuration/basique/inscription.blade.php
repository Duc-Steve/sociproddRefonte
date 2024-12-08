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
    <link rel="apple-touch-icon" href="/paysSystemeConfig/public/assets/img/sociproddLogo.png">
    
    <link rel="shortcut icon" href="/paysSystemeConfig/public/assets/img/sociproddLogo.png"/>

	<title>SOCIPRODD Inscription</title>

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
							<h1 class="h2">Création de mon compte SOCIPRODD</h1>
						</div>


						<div class="card br-sociprodd-2 bg-sociprodd-bleuefoncee">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="{{route('inscription.creation')}}" method="POST">
										@csrf
										
											
										<div class="text-center d-flex justify-content-end mb-3">
											<button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Lancer la création!</button>
										</div>

										<div class="mb-3">
											<label class="d-flex text-sociprodd-blanc">Nom et prénom<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
											<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee" type="text" name="nom_prenom" id="nom_prenom" value="{{ old('nom_prenom') }}" placeholder="votre nom et prénom" minlength="2" maxlength="75" required>
											@error('nom_prenom')
												<div class="text-sociprodd-blanc">{{ $message }}</div>
											@enderror
										</div>

										<div class="mb-3">
											<label class="d-flex text-sociprodd-blanc">Adresse mail <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
											<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="votre adresse mail" minlength="10" maxlength="250" required>
											@error('email')
												<div class="text-sociprodd-blanc">{{ $message }}</div>
											@enderror
										</div>

										
										<div class="mb-3">
											<label class="d-flex text-sociprodd-blanc">Mot de passe <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
											<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee" type="password" name="password" id="password" value="{{ old('password') }}" minlength="7" maxlength="35" required>
											@error('password')
												<div class="text-sociprodd-blanc">{{ $message }}</div>
											@enderror
										</div>

										
										<div class="mb-3">
											<label class="d-flex text-sociprodd-blanc">Confirmer le mot de passe <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
											<input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee bx-shadow-sociprodd-bleuefoncee" type="password" name="verifipassword" id="verifipassword" value="{{ old('verifipassword') }}" minlength="7" maxlength="35" required>
											@error('verifipassword')
												<div class="text-sociprodd-blanc">{{ $message }}</div>
											@enderror
										</div>

													
										<div class="mt-3">
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="accepter" name="regle_confirme" required>
												<span class="form-check-label text-sociprodd-blanc">J’accepte les conditions d’utilisation!</span>
											</label>
											@error('regle_confirme')
												<div class="text-sociprodd-blanc">{{ $message }}</div>
											@enderror
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

	<script src="/paysSystemeConfig/public/assets/js/sociprodd.js"></script>


</body>

</html>