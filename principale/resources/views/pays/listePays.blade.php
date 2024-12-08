<!DOCTYPE html>
<html lang="fr" translate="no">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pays SOCIPRODD">
    <meta name="author" content="AMOSAG-Consulting">
	<meta name="keywords">
    <meta http-equiv="refresh" content="30">

    <!-- PWA  -->
    <meta name="theme-color" content="#050A2E"/>
    <link rel="apple-touch-icon" href="/paysSystemeConfig/public/systeme/img/sociproddLogo.png">
    
    <link rel="shortcut icon" href="/paysSystemeConfig/public/systeme/img/sociproddLogo.png"/>

	<title>Pays SOCIPRODD</title>

    <link href="/paysSystemeConfig/public/systeme/css/sociproddBootstrap.css" rel="stylesheet">
    <link href="/paysSystemeConfig/public/systeme/css/sociproddPersonnalise.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body oncontextmenu="return false;" oncopy="return false;" oncut="return false;" onpaste="return false;" >


		<main class="d-flex w-100 mb-5">
			<div class="container d-flex flex-column">
				
                
				<div class="row vh-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">
                            
                            <div class="text-center">
                                <img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" alt="Logo SOCIPRODD" class="img-fluid rounded-circle" width="132" height="132" />
                            </div>

							<div class="text-center mt-3">
								<h1 class="h2">Bienvenue à SOCIPRODD mondiale</h1>
							</div>
       
                            @if($NombrePaysActifs > 0)
                                <div class="mt-3">
                                    <select class="form-control form-control-lg br-sociprodd-1 bdr-sociprodd-all-bleuefoncee" name="liste_pays" id="liste_pays" required>
                                        <option value="" selected>Sélectionnez un pays</option>
                                        <option value="cameroun">Cameroun</option>
                                        @foreach($listePaysActifs as $listePaysActifsIndividu)
                                            <option value="{{ $listePaysActifsIndividu->nom_url }}">
                                                {{ Crypt::decrypt($listePaysActifsIndividu->nom_normale) }}
                                            </option>
                                        @endforeach   
                                    </select>
                                </div>
                            @else
                                <h2 class="mb-4">Les sites sont en cours de développement. Merci de votre patience.</h2>
                                 
                                <div class="text-center mt-5">
                                    <a href="https://sociprodd.org" class="text-sociprodd-bleuefoncee">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" class="me-2"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg>
                                        retour
                                    </a>

                                </div>
                            @endif

						</div>
					</div>
				</div>
			</div>
		</main>


        
        
	
    <script src="/paysSystemeConfig/public/systeme/js/sociprodd.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Sélectionnez l'élément du menu déroulant
        var selectPays = document.querySelector('select[name="liste_pays"]');
        
        // Ajoutez un écouteur d'événement pour l'événement de changement
        selectPays.addEventListener('change', function() {

            // Récupérer la valeur de l'option sélectionnée
            var selectedPays = this.value;
            
            // Définir l'URL de redirection
            var redirectUrl;

            if (selectedPays === "cameroun") {

                redirectUrl = "https://sociprodd.org";

            } else if (selectedPays != "cameroun") {

                redirectUrl = `http://pays.sociprodd.org/${selectedPays}`;

            }

            // Afficher SweetAlert
            Swal.fire({
                html: `
                    <div style="text-align: center;">
                        <img src="/paysSystemeConfig/public/systeme/img/sociproddLogo.png" class="img-fluid" width="132" height="132">
                        <h2>Redirection en cours...</h2>
                    </div>`,
                text: 'Succès!',
                timer: 3000, // Optionnel : délai d'affichage de l'alerte en millisecondes
                timerProgressBar: true,
                showConfirmButton: false
            }).then(() => {
                // Rediriger vers le site du pays en question
                // Ouvrir l'URL dans un nouvel onglet
                window.open(redirectUrl, '_blank');
            });
        });
    </script>


</body>

</html>