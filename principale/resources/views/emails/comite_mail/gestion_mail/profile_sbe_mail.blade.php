@component('mail::message')
# Bonjour {{ $nomPrenom }},

Nous vous envoyons ce message pour vous permettre de gérer votre profil sur notre plateforme. 
Veuillez cliquer sur le bouton ci-dessous pour accéder à la gestion de votre profil.

@component('mail::button', ['url' => $confirmationUrl])
    Gestion
@endcomponent

Si vous n'avez pas demandé cette action, vous pouvez ignorer cet e-mail.

Merci,
{{ config('app.name') }}
@endcomponent