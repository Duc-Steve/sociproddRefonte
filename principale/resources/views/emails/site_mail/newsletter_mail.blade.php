@component('mail::message')
    # Abonner newsletter
    
    Bonjour {{ $recipientEmail }},
    
    Vous venez de vous abonner à notre newsletter.
    
    Merci de suivre nos actualités et de faire partie de notre communauté.
    
    À bientôt,
    
    Merci,
    {{ config('app.name') }}
@endcomponent
