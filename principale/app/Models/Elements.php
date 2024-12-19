<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elements extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'elements';
    protected $primaryKey = 'id_element';
    protected $fillable = [
        'reference_unique',
        'titre',
        'petite_description',
        'nom_photos',
        'lien_photos',
        'lien_video',
        'type_element',
        'mission_id',
        'pays_id',
        'utilisateur_id',
        'validateur_id',
        'statut_element'
    ];

    
    // règle pour le titre
    public static $rulesTitre = [

        'titre' => 'required|string|max:100',
    ];
    
    // règle pour la description
    public static $rulesDescription = [

        'description' => 'required|string|max:300',
    ];
    
    // règle pour la video
    public static $rulesVideo = [

        'video' => 'required|string|max:350',
    ];


    // règle pour l'image
    public static $rulesImage = [
    
        'image' => 'required|file|max:10240|mimetypes:image/jpeg,image/png,image/webp', // Limite à 10 Mo (1024 Ko * 10),
    ];

    
    // règle pour le type d'element
    public static $rulesTypeElement = [

        'choix_type_element' => 'required|in:actualite,reportage,podcast,projet',
    ];

    
    public static $customTypeElement = [

        'choix_type_element.required' => "Le type d'element est requis.",
        'choix_type_element.in' => "Le type d'element doit être une chaîne de caractères.",

    ];

     
    public static $customTitre = [

        'titre.required' => 'Le titre est requis.',
        'titre.string' => 'Le titre doit être une chaîne de caractères.',
        'titre.max' => 'Le titre ne doit pas dépasser 100 caractères.',

    ];
     
    public static $customDescription = [

        'description.required' => 'La description est requis.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'description.max' => 'La description ne doit pas dépasser 300 caractères.',

    ];

    
     
    public static $customVideo = [

        'video.required' => 'Le lien de la video est requis.',
        'video.string' => 'Le lien de la video doit être une chaîne de caractères.',
        'video.max' => 'Le lien de la video ne doit pas dépasser 350 caractères.',

    ];
    
    public static $customImage = [
        'image.required' => 'Le champ image est obligatoire.',
        'image.file' => 'Le champ doit être un fichier.',
        'image.max' => 'Le fichier ne doit pas dépasser 10 Mo.',
        'image.mimetypes' => 'Le fichier doit être de type : jpeg, jpg, png, webp.',
    ];
    
    
}
