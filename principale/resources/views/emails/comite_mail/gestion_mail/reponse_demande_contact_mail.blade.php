@component('mail::message')
# {{ $sujet }}
    
Bonjour,
    
La réponse à votre requête de contact est:

{{ $messageContent }}

{{ $signature }}

@endcomponent

