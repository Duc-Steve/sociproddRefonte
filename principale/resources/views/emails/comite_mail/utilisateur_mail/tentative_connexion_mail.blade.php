@component('mail::message')
# Confirmation de sécurité

Bonjour {{ $nomPrenom }},

Un appareil avec les informations suivantes essaie de se connecter à votre compte :

- **Adresse IP :** {{ $AdresseIp }}
- **Navigateur :** {{ $typeNavigateur }}
- **Appareil :** {{ $typeAppareil }}
- **Système d'exploitation :** {{ $typeSysteme }} {{ $VersionSysteme }}

Merci,<br>
{{ config('app.name') }}
@endcomponent
