<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualites extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'actualites';
    protected $primaryKey = 'id_actualite';
    protected $fillable = [
        'description',
        'nom_photos',
        'lien_photos',
        'element_id',
        'utilisateur_id',
        'statut_actualite'
    ];

    
    // règle pour la description
    public static $rulesDescription = [

        'description' => 'required|string|max:2000',
    ];

    

    // règle pour l'image
    public static $rulesImage = [
    
        'image' => 'required|file|max:10240|mimetypes:image/jpeg,image/png,image/webp', // Limite à 10 Mo (1024 Ko * 10),
    ];

    
    public static $customDescription = [

        'description.required' => 'La description est requis.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'description.max' => 'La description ne doit pas dépasser 2000 caractères.',

    ];

     
    public static $customImage = [
        'image.required' => 'Le champ image est obligatoire.',
        'image.file' => 'Le champ doit être un fichier.',
        'image.max' => 'Le fichier ne doit pas dépasser 10 Mo.',
        'image.mimetypes' => 'Le fichier doit être de type : jpeg, jpg, png, webp.',
    ];
}
