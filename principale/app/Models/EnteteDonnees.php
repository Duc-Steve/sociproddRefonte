<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnteteDonnees extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'entete_donnees';
    protected $primaryKey = 'id_entete_donnee';
    protected $fillable = [
        'phrase_un',
        'nom_image_dynamique_un',
        'lien_image_dynamique_un',
        'phrase_deux',
        'nom_image_dynamique_deux',
        'lien_image_dynamique_deux',
        'phrase_trois',
        'nom_image_dynamique_trois',
        'lien_image_dynamique_trois',
        'phrase_video',
        'nom_video',
        'lien_video',
        'phrase_statique',
        'nom_image_statique',
        'lien_image_statique',
        'pays_id',
        'utilisateur_id',
    ];

    // Règles de validation pour chaque colonne individuelle

    // Règle pour 'phrase_un'
    public static $rulesPhraseUn = [
        'phrase_un' => 'required|string|max:55',
    ];

    // Règle pour 'image_un'
    public static $rulesImageUn = [
        'image_un' => 'required|file|max:10240|mimes:jpeg,jpg,png,webp',
    ];

    // Règle pour 'phrase_deux'
    public static $rulesPhraseDeux = [
        'phrase_deux' => 'required|string|max:55',
    ];

    // Règle pour 'image_deux'
    public static $rulesImageDeux = [
        'image_deux' => 'required|file|max:10240|mimes:jpeg,jpg,png,webp',
    ];

    // Règle pour 'phrase_video'
    public static $rulesPhraseVideo = [
        'phrase_video' => 'required|string|max:255',
    ];

    
    // Règle pour 'image_trois'
    public static $rulesImageTrois = [
        'image_trois' => 'required|file|max:10240|mimes:jpeg,jpg,png,webp',
    ];

    // Règle pour 'phrase_trois'
    public static $rulesPhraseTrois = [
        'phrase_trois' => 'required|string|max:255',
    ];


    // Règle pour 'video'
    public static $rulesVideo = [
        'video' => 'required|file|max:30480|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime',
    ];

    // Règle pour 'phrase_statique'
    public static $rulesPhraseStatique = [
        'phrase_statique' => 'required|string|max:55',
    ];

    // Règle pour 'image_statique'
    public static $rulesImageStatique = [
        'image_statique' => 'required|file|max:10240|mimes:jpeg,jpg,png,webp',
    ];


    // Messages d'erreur personnalisés pour chaque règle de validation

    // Messages pour 'phrase_un'
    public static $customMessagesPhraseUn = [
        'phrase_un.required' => 'La phrase un est obligatoire.',
        'phrase_un.string' => 'La phrase un doit être une chaîne de caractères.',
        'phrase_un.max' => 'La phrase un ne peut pas dépasser 55 caractères.',
    ];

    // Messages pour 'image_un'
    public static $customMessagesImageUn = [
        'image_un.required' => 'L\'image un est obligatoire.',
        'image_un.file' => 'L\'image un doit être un fichier.',
        'image_un.max' => 'La taille de l\'image un ne peut pas dépasser 10 Mo.',
        'image_un.mimes' => 'L\'image un doit être au format JPEG, JPG, PNG ou WEBP.',
    ];

    // Messages pour 'phrase_deux'
    public static $customMessagesPhraseDeux = [
        'phrase_deux.required' => 'La phrase deux est obligatoire.',
        'phrase_deux.string' => 'La phrase deux doit être une chaîne de caractères.',
        'phrase_deux.max' => 'La phrase deux ne peut pas dépasser 55 caractères.',
    ];


    // Messages pour 'image_deux'
    public static $customMessagesImageDeux = [
        'image_deux.required' => 'L\'image deux est obligatoire.',
        'image_deux.file' => 'L\'image deux doit être un fichier.',
        'image_deux.max' => 'La taille de l\'image deux ne peut pas dépasser 10 Mo.',
        'image_deux.mimes' => 'L\'image deux doit être au format JPEG, JPG, PNG ou WEBP.',
    ];

    

    // Messages pour 'phrase_trois'
    public static $customMessagesPhraseTrois = [
        'phrase_trois.required' => 'La phrase trois est obligatoire.',
        'phrase_trois.string' => 'La phrase trois doit être une chaîne de caractères.',
        'phrase_trois.max' => 'La phrase trois ne peut pas dépasser 55 caractères.',
    ];
    

    // Messages pour 'image_trois'
    public static $customMessagesImageTrois = [
        'image_trois.required' => 'L\'image trois est obligatoire.',
        'image_trois.file' => 'L\'image trois doit être un fichier.',
        'image_trois.max' => 'La taille de l\'image trois ne peut pas dépasser 10 Mo.',
        'image_trois.mimes' => 'L\'image trois doit être au format JPEG, JPG, PNG ou WEBP.',
    ];
    
    // Messages pour 'phrase_video'
    public static $customMessagesPhraseVideo = [
        'phrase_video.required' => 'La phrase vidéo est obligatoire.',
        'phrase_video.string' => 'La phrase vidéo doit être une chaîne de caractères.',
        'phrase_video.max' => 'La phrase vidéo ne peut pas dépasser 255 caractères.',
    ];

    // Messages pour 'video'
    public static $customMessagesVideo = [
        'video.required' => 'Le fichier vidéo est obligatoire.',
        'video.file' => 'Le fichier vidéo doit être un fichier.',
        'video.max' => 'La taille du fichier vidéo ne peut pas dépasser 30 Mo.',
        'video.mimes' => 'Le fichier vidéo doit être au format vidéo valide.',
    ];

    // Messages pour 'phrase_statique'
    public static $customMessagesPhraseStatique = [
        'phrase_statique.required' => 'La phrase statique est obligatoire.',
        'phrase_statique.string' => 'La phrase statique doit être une chaîne de caractères.',
        'phrase_statique.max' => 'La phrase statique ne peut pas dépasser 55 caractères.',
    ];

    // Messages pour 'image_statique'
    public static $customMessagesImageStatique = [
        'image_statique.required' => 'L\'image statique est obligatoire.',
        'image_statique.file' => 'L\'image statique doit être un fichier.',
        'image_statique.max' => 'La taille de l\'image statique ne peut pas dépasser 10 Mo.',
        'image_statique.mimes' => 'L\'image statique doit être au format JPEG, JPG, PNG ou WEBP.',
    ];
}
