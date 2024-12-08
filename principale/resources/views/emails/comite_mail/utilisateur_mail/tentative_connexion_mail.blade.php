@component('mail::message')
# Confirmation de sécurité

Bonjour {{ $nomPrenom }},

Un appareil avec les informations suivantes essaie de se connecter à votre compte :

- **Adresse IP :** {{ $AdresseIp }}
- **Navigateur :** {{ $typeNavigateur }}
- **Appareil :** {{ $typeAppareil }}
- **Système d'exploitation :** {{ $typeSysteme }} {{ $VersionSysteme }}

Si c'est bien vous, cliquez sur le lien ci-dessous pour confirmer la sécurité :

@component('mail::button', ['url' => $ouiSecuriteUrl])
    Confirmer la sécurité
@endcomponent

Si ce n'est pas vous, cliquez sur le lien ci-dessous pour annuler cette tentative :

@component('mail::button', ['url' => $nonSecuriteUrl])
    Annuler la tentative
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
