<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\Mail;
use App\Mail\SiteMail\NewsltetterMail;
use App\Mail\ComiteMail\GestionMail\CommuniquerMail;

class Newsletters extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'newsletters';
    protected $primaryKey = 'id_newsletter';
    protected $fillable = [
        'adresse_mail',
        'pays_id',
        'statut_newsletter',
    ];















    /**
     * Fonction d'envoie du mail de diffusion du compte
     *
     * @param \App\Models\Utilisateur $compteNewsletter
     * @param string $sujet
     * @param string $message
     * @param string $signature
     * @return bool
     */
    public static function PrendreMessageAndSendEmail($compteNewsletter, $sujet, $message, $signature)
    {
        // Déchiffrement de l'adresse e-mail du destinataire
        $recipientEmail = Crypt::decrypt($compteNewsletter->adresse_mail);

        // Envoi de l'e-mail de confirmation avec les détails nécessaires
        Mail::to($recipientEmail)->send(new CommuniquerMail($sujet, $message, $signature));

        return true;
    }
    
    
    
    
    


    /**
     * Fonction d'envoie du mail d'inscription newsletter
     *
     * @param \App\Models\Utilisateur $compteNewsletter
     * @return bool
     */
    public static function InscriptionAndSendEmail($compteNewsletter)
    {
        // Déchiffrement de l'adresse e-mail du destinataire
        $recipientEmail = Crypt::decrypt($compteNewsletter->adresse_mail);

        // Envoi de l'e-mail de confirmation avec les détails nécessaires
        Mail::to($recipientEmail)->send(new NewsltetterMail($recipientEmail));

        return true;
    }
    
    
    
    
    
    
    
    
    
    // règle pour l'adresse mail
    public static $rulesEmail = [

        'email' => 'required|email|max:250',
    ];

    
    public static $customEmail = [
        'email.required' => 'L\'adresse e-mail est requise.',
        'email.email' => 'L\'adresse e-mail doit être valide.',
        'email.max' => 'L\'adresse e-mail ne doit pas dépasser 250max caractères.',

    ];
    
    public static $rulesSujet = [

        'sujet' => 'required|string|max:250',
    ];

    
    public static $customSujet = [
        'sujet.required' => 'Le sujet est requise.',
        'sujet.string' => 'Le sujet doit être une chaine de caractère.',
        'sujet.max' => 'Le sujet ne doit pas dépasser 250max caractères.',

    ];
    
    
    public static $rulesMessage = [

        'message' => 'required|string|max:1500',
    ];

    
    public static $customMessage = [
        'message.required' => 'Le message est requise.',
        'message.string' => 'Le message doit être une chaine de caractère.',
        'message.max' => 'Le message ne doit pas dépasser 1500 max caractères.',

    ];
    
    
    public static $rulesSignature = [

        'signature' => 'required|string|max:500',
    ];

    
    public static $customSignature = [
        'signature.required' => 'La signature est requise.',
        'signature.string' => 'La signature doit être une chaine de caractère.',
        'signature.max' => 'La signature ne doit pas dépasser 500max caractères.',

    ];
    
}
