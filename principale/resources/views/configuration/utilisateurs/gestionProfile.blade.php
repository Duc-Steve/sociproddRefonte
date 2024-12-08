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

	<title>SOCIPRODD Gestion profile</title>

    <link href="/paysSystemeConfig/public/systeme/css/sociproddBootstrap.css" rel="stylesheet">
    <link href="/paysSystemeConfig/public/systeme/css/sociproddPersonnalise.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body oncontextmenu="return false;" oncopy="return false;" oncut="return false;" onpaste="return false;" >


		<main class="d-flex w-100 mb-5 mt-5">
			<div class="container d-flex flex-column">
				
				<!--Inclusion du ficher pour l'afffichage des messages d'erreur ou succes au cas ou-->
				@include('inclusions.messageErrorSucces')
               
                @if(!empty($profileRecuperer))
    				<div class="row">
    					<div class="col-lg-6 mt-3">
    						<div class="text-center mt-2">
    							<h1 class="h2">Gestion de mon profile de membre SOCIPRODD</h1>
    						</div>
    						<div class="m-sm-4" style="width: 500px; height: auto;">
    							
    						    <img src="{{ config('images-basiques-paths.basique') }}/{{ Crypt::decrypt($profileRecuperer->lien_photo)}}" alt="{{ Crypt::decrypt($profileRecuperer->nom_prenom)}}" class="w-100">
                            </div>
                        </div>
    				
    					<div class="col-lg-6 mt-3">
    					    
    						
    				        <form action="{{ route('gestion-profile.enregistrer', ['Email' => $profileRecuperer->email, 'TokenGestion' => $profileRecuperer->token_gestion]) }}" method="POST"  enctype="multipart/form-data" class="mt-4">
    							@csrf
    							
    							<div class="d-flex justify-content-end mt-5">
    								<button type="submit" class="br-sociprodd-1 bdr-sociprodd-all-bleueclaire bg-sociprodd-bleueclaire text-sociprodd-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Mettre à jours!</button>
    							</div>
    							
                								       
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee"> Changer d'Image de presentation <strong class="px-1" style="color: #fdb913; font-size:1em;">(Facultatif)</strong></label>
                                    <input class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" type="file" name="image" id="image" accept=".jpg,.jpeg,.png,.webp">
                                    @error('image')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div> 
                                
    
    							<div class="mb-3 mt-3">
    								<label class="d-flex text-sociprodd-bleuefoncee">Nom et prénom <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
    								<input class="form-control form-control-lg br-sociprodd-1" type="text" name="nom_prenom" id="nom_prenom" value="{{ Crypt::decrypt($profileRecuperer->nom_prenom)}}" required>
    								@error('nom_prenom')
    									<div class="text-sociprodd-jaune">{{ $message }}</div>
    								@enderror
    							</div>
    							
    
    							<div class="col-lg-12 d-flex gap-2">
    								<div class="col-lg-6 mb-3 mt-3">
    									<label class="d-flex text-sociprodd-bleuefoncee">Url page ou compte facebook <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
    									<input class="form-control form-control-lg br-sociprodd-1" type="url" name="url_facebook" id="url_facebook" value="{{ Crypt::decrypt($profileRecuperer->url_facebook)}}">
    									@error('url_facebook')
    										<div class="text-sociprodd-jaune">{{ $message }}</div>
    									@enderror
    								</div>
    								
    								<div class="col-lg-6 mb-3 mt-3">
    									<label class="d-flex text-sociprodd-bleuefoncee">Url page ou compte Twitter <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
    									<input class="form-control form-control-lg br-sociprodd-1" type="url" name="url_twitter" id="url_twitter" value="{{ Crypt::decrypt($profileRecuperer->url_twitter)}}">
    									@error('url_twitter')
    										<div class="text-sociprodd-jaune">{{ $message }}</div>
    									@enderror
    								</div>
    							</div>
    
    							
    							<div class="col-lg-12 d-flex gap-2">
    								<div class="col-lg-6 mb-3 mt-3">
    									<label class="d-flex text-sociprodd-bleuefoncee">Url page ou compte PorteFolio <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
    									<input class="form-control form-control-lg br-sociprodd-1" type="url" name="url_portefolio" id="url_portefolio" value="{{ Crypt::decrypt($profileRecuperer->url_portefolio)}}">
    									@error('url_portefolio')
    										<div class="text-sociprodd-jaune">{{ $message }}</div>
    									@enderror
    								</div>
    								
    								
    								<div class="col-lg-6 mb-3 mt-3">
    									<label class="d-flex text-sociprodd-bleuefoncee">Url page ou compte LinkedIn <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
    									<input class="form-control form-control-lg br-sociprodd-1" type="url" name="url_linkedin" id="url_linkedin" value="{{ Crypt::decrypt($profileRecuperer->url_linkedin)}}">
    									@error('url_linkedin')
    										<div class="text-sociprodd-jaune">{{ $message }}</div>
    									@enderror
    								</div>
    							</div>
    							
                                <div class="mb-3">
                                    <label class="d-flex text-sociprodd-bleuefoncee">Petit message<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
                                    <textarea class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee w-100" name="description" id="description" style="resize: none; height: 118px;" placeholder="écrivez ici..............." maxlength="250">{{ Crypt::decrypt($profileRecuperer->petit_message)}}</textarea>
                                    @error('description')
                                        <div class="text-sociprodd-bleuefoncee">{{ $message }}</div>
                                    @enderror
                                </div>
    							
    						</form>
    				    </div>
                    </div>
                @else 
                    <div class="row vh-100">
    					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
    						<div class="d-table-cell align-middle">
    						
    							<div class="text-center mt-2">
    								<h1 class="h2">Aucun profile trouver</h1>
    							</div>
    							
    							
    						</div>
    					</div>
    				</div>
                
                @endif

					
			</div>
		</main>


        
        
	
    <script src="/paysSystemeConfig/public/systeme/js/sociprodd.js"></script>
	

</body>

</html>