@component('mail::message')
# {{ $sujet }}
    
Bonjour,
    
Nous avons le plaisir de vous partager notre dernière actualité :

{{ $messageContent }}

{{ $signature }}

Merci de suivre nos actualités et de faire partie de notre communauté.
    
À bientôt,

L'équipe {{ config('app.name') }}
@endcomponent

