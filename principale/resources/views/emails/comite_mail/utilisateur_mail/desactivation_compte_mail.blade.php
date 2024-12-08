@component('mail::message')
# Désactivation du compte

Bonjour {{ $nomPrenom }},

Votre compte a été désactiver avec succès. 
Veuillez contacter l'organisation pour avoir plus d'information !

Merci,
{{ config('app.name') }}
@endcomponent
