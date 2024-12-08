<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportages extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'reportages';
    protected $primaryKey = 'id_reportage';
    protected $fillable = [
        'description',
        'lien_video',
        'element_id',
        'utilisateur_id',
        'statut_reportage'
    ];

    
    
    // règle pour la description
    public static $rulesDescription = [

        'description' => 'required|string|max:1000',
    ];
    
    // règle pour la video
    public static $rulesVideo = [

        'video' => 'required|string|max:350',
    ];

    
    public static $customDescription = [

        'description.required' => 'La description est requis.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'description.max' => 'La description ne doit pas dépasser 1000 caractères.',

    ];

    
     
    public static $customVideo = [

        'video.required' => 'Le lien de la video est requis.',
        'video.string' => 'Le lien de la video doit être une chaîne de caractères.',
        'video.max' => 'Le lien de la video ne doit pas dépasser 350 caractères.',

    ];
}
