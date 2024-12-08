@component('mail::message')
# Activation du compte

Bonjour {{ $nomPrenom }},

Votre compte a été activer avec succès.

Merci,
{{ config('app.name') }}
@endcomponent
