
<!-- Inclure intl-tel-input JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
    // Fonction pour générer les options du select

    function generateCountryName() {
        
        // Sélectionnez l'élément select
        const selectNamePays = document.getElementById('nom_correct_pays');
        
        // Parcourez les données des pays
        for (let countryCode in window.intlTelInputGlobals.getCountryData()) {
            const countryData = window.intlTelInputGlobals.getCountryData()[countryCode];
            // Créez une option pour chaque pays avec son indicatif
            const option = document.createElement('option');
            option.value = countryData.name;
            option.textContent = countryData.name;
            selectNamePays.appendChild(option);
        }
    }


    // Appelez la fonction pour générer les options des nom des pays une fois que le document est prêt
    document.addEventListener('DOMContentLoaded', generateCountryName);
</script>