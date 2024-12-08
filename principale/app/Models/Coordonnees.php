<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordonnees extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'coordonnees';
    protected $primaryKey = 'id_coordonnee';
    protected $fillable = [
        'telephone',
        'fixe',
        'adresse_mail',
        'longitude',
        'latitude',
        'localisation',
        'url_facebook',
        'url_twitter',
        'url_youtube',
        'url_tiktok',
        'url_linkedin',
        'url_chaine_whatsapp',
        'image_carte_pays',
        'pays_id',
        'utilisateur_id'
    ];
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public static $rulesUrl = [

        'url_facebook' => 'nullable|string|max:250',
        'url_twitter' => 'nullable|string|max:250',
        'url_youtube' => 'nullable|string|max:250',
        'url_tiktok' => 'nullable|string|max:250',
        'url_linkedin' => 'nullable|string|max:250',
        'url_chaine_whatsapp' => 'nullable|string|max:250',
    
    ];

    public static $customUrl = [
        'url_facebook.string' => 'L\'URL Facebook doit être une chaîne de caractères valide.',
        'url_facebook.max' => 'L\'URL Facebook ne doit pas dépasser 250 caractères.',
        
        'url_twitter.string' => 'L\'URL Twitter doit être une chaîne de caractères valide.',
        'url_twitter.max' => 'L\'URL Twitter ne doit pas dépasser 250 caractères.',
        
        'url_youtube.string' => 'L\'URL YouTube doit être une chaîne de caractères valide.',
        'url_youtube.max' => 'L\'URL YouTube ne doit pas dépasser 250 caractères.',
        
        'url_tiktok.string' => 'L\'URL TikTok doit être une chaîne de caractères valide.',
        'url_tiktok.max' => 'L\'URL TikTok ne doit pas dépasser 250 caractères.',
        
        'url_linkedin.string' => 'L\'URL LinkedIn doit être une chaîne de caractères valide.',
        'url_linkedin.max' => 'L\'URL LinkedIn ne doit pas dépasser 250 caractères.',
        
        'url_chaine_whatsapp.string' => 'L\'URL de la chaîne WhatsApp doit être une chaîne de caractères valide.',
        'url_chaine_whatsapp.max' => 'L\'URL de la chaîne WhatsApp ne doit pas dépasser 250 caractères.',
    ];

    
    
    // règle pour le numeros
    public static $rulesNumerosSimple = [

        'numeros_contact' => 'required|string|regex:/^[0-9+]+$/|min:10|max:20',
    
    ];
    // règle pour le numeros
    public static $rulesNumerosFixe = [

        'numeros_fixe' => 'required|string|regex:/^[0-9+]+$/|min:10|max:20',
    
    ];
    
    
    // règle pour l'adresse mail
    public static $rulesEmail = [

        'email' => 'required|email|max:250',
    ];
    
    
    // règle pour l'adresse residence
    public static $rulesAdresse = [

        'longitude' => 'required|string|max:50',
        'latitude' => 'required|string|max:50',
        'localisation' => 'required|string|max:150',
    ];


    

    public static $customNumerosSimple = [
        'numeros_contact.required' => 'Le numéros de téléphone est requis.',
        'numeros_contact.string' => 'Le numéros de téléphone doit être une chaîne de caractères.',
        'numeros_contact.regex' => 'Le numéros de téléphone doit contenir des chiffres uniquements.',
        'numeros_contact.min' => 'Le numéros de téléphone doit être 10 chiffres au minimun.',
        'numeros_contact.max' => 'Le numéros de téléphone ne doit pas dépasser 20 chiffres.',
    ];

    

    public static $customNumerosFixe = [
        'numeros_fixe.required' => 'Le numéros fixe est requis.',
        'numeros_fixe.string' => 'Le numéros fixe doit être une chaîne de caractères.',
        'numeros_fixe.regex' => 'Le numéros fixe doit contenir des chiffres uniquements.',
        'numeros_fixe.min' => 'Le numéros fixe doit être 10 chiffres au minimun.',
        'numeros_fixe.max' => 'Le numéros fixe ne doit pas dépasser 20 chiffres.',
    ];

    
    public static $customEmail = [
        'email.required' => 'L\'adresse e-mail est requise.',
        'email.email' => 'L\'adresse e-mail doit être valide.',
        'email.max' => 'L\'adresse e-mail ne doit pas dépasser 250max caractères.',

    ];
    
    
    public static $customAdresse = [

        'longitude.required' => 'La longitude est requis.',
        'longitude.string' => 'La longitude doit être une chaîne de caractères.',
        'longitude.max' => 'La longitude ne doit pas dépasser 50 caractères.',

        'latitude.required' => "Latitude est requis.",
        'latitude.string' => "Latitude doit être une chaîne de caractères.",
        'latitude.max' => "Latitude ne doit pas dépasser 50 caractères.",

        'localisation.required' => 'La localisation est requis.',
        'localisation.string' => 'La localisation doit être une chaîne de caractères.',
        'localisation.max' => 'La localisation ne doit pas dépasser 150 caractères.',
    ];
    
    
    // règle pour l'image
    public static $rulesImage = [
    
        'image_carte_pays' => 'required|file|max:10240|mimetypes:image/jpeg,image/png,image/webp', // Limite à 10 Mo (1024 Ko * 10),
    ];

    public static $customImage = [
        'image_carte_pays.required' => 'Le champ image est obligatoire.',
        'image_carte_pays.file' => 'Le champ doit être un fichier.',
        'image_carte_pays.max' => 'Le fichier ne doit pas dépasser 10 Mo.',
        'image_carte_pays.mimetypes' => 'Le fichier doit être de type : jpeg, jpg, png, webp.',
    ];
}
