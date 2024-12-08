@component('mail::message')
# Confirmation de compte

Bonjour {{ $nomPrenom }},

Votre compte a été créé avec succès. Voici votre mot de passe généré :

**Mot de passe :** {{ $motDePasseGenerer }}

Cliquez sur le lien ci-dessous pour confirmer votre compte :

@component('mail::button', ['url' => $confirmationUrl])
    Confirmer mon compte
@endcomponent

Merci,
{{ config('app.name') }}
@endcomponent
