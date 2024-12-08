<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcasts extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'podcasts';
    protected $primaryKey = 'id_podcast';
    protected $fillable = [
        'description',
        'nom_audio',
        'lien_audio',
        'element_id',
        'utilisateur_id',
        'statut_podcast'
    ];

     
    
    // règle pour la description
    public static $rulesDescription = [

        'description' => 'required|string|max:1000',
    ];
    
    public static $customDescription = [

        'description.required' => 'La description est requis.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'description.max' => 'La description ne doit pas dépasser 1000 caractères.',

    ];

    // Règle pour le fichier audio
    public static $rulesAudio = [
        'audio' => 'required|file|mimes:mp3,mp4,opus,wav|max:100000', // 100MB max size
    ];

    // Messages d'erreur personnalisés pour le fichier audio
    public static $customAudio = [
        'audio.required' => 'Le fichier audio est requis.',
        'audio.file' => 'Le fichier doit être un fichier valide.',
        'audio.mimes' => 'Le fichier doit être au format mp3 ou mp4 ou opus ou wav.',
        'audio.max' => 'Le fichier ne doit pas dépasser 100MB.',
    ];

}
