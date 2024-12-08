<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\Mail;
use App\Mail\ComiteMail\GestionMail\ReponseDemandeContactMail;

class Contacts extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'contacts';
    protected $primaryKey = 'id_contact';
    protected $fillable = [
        'nom_prenom',
        'adresse_mail',
        'sujet',
        'message',
        'vue',
        'pays_id',
        'utilisateur_id'
    ];










    
    
    
    /**
     * Fonction d'envoie du mail de réponse compte
     *
     * @param \App\Models\Utilisateur $demandeContact
     * @param string $message
     * @param string $signature
     * @return bool
     */
    public static function ReponseDemandeContactAndSendEmail($demandeContact, $message, $signature)
    {
        // Déchiffrement de l'adresse e-mail du destinataire
        $recipientEmail = Crypt::decrypt($demandeContact->adresse_mail);

        // Déchiffrement de le sujet
        $sujet = Crypt::decrypt($demandeContact->sujet);

        // Envoi de l'e-mail de confirmation avec les détails nécessaires
        Mail::to($recipientEmail)->send(new ReponseDemandeContactMail($sujet, $message, $signature));

        return true;
    }
    
    
    
    
    
    














    

    // règle pour le nom prenom
    public static $rulesNomPrenom = [

        'nom_prenom' => 'required|string|regex:/^[\pL\s\-\'.,!?]+$/u|min:2|max:70',
    ];
    
    // règle pour l'adresse mail
    public static $rulesEmail = [

        'email' => 'required|email|max:250',
    ];

    // règle pour le sujet
    public static $rulesSujet = [

        'sujet' => 'required|string|max:150',
    ];

    
    // règle pour la description
    public static $rulesDescription = [

        'description' => 'required|string|max:500',
    ];
      
    public static $customNomPrenom = [

        'nom_prenom.required' => 'Le nom et prenom est requis.',
        'nom_prenom.string' => 'Le nom et prenom doit être une chaîne de caractères.',
        'nom_prenom.regex' => 'Le nom et prenom ne peut pas contenir des caractères inconnues',
        'nom_prenom.min' => 'Le nom et prenom doit etre au minimun 2 caractères.',
        'nom_prenom.max' => 'Le nom et prenom ne doit pas dépasser 70 caractères.',

    ];

    public static $customEmail = [
        'email.required' => 'L\'adresse e-mail est requise.',
        'email.email' => 'L\'adresse e-mail doit être valide.',
        'email.max' => 'L\'adresse e-mail ne doit pas dépasser 250max caractères.',

    ];
    
    public static $customDescription = [

        'description.required' => 'La description est requis.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'description.max' => 'La description ne doit pas dépasser 500 caractères.',

    ];

    public static $customSujet = [

        'sujet.required' => 'Le sujet est requis.',
        'sujet.string' => 'Le sujet doit être une chaîne de caractères.',
        'sujet.max' => 'Le sujet ne doit pas dépasser 150 caractères.',

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
