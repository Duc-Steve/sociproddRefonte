@component('mail::message')
# Confirmation de compte

Bonjour {{ $nomPrenom }},

Vous avez demandé à réinitialiser votre mot de passe. 

Cliquez sur le bouton ci-dessous pour procéder au changement de votre mot de passe :

@component('mail::button', ['url' => $urlPersonnelleMotPasse])
    Réinitialisation
@endcomponent

Merci,
{{ config('app.name') }}
@endcomponent