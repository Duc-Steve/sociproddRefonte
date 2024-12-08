<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pays';
    protected $primaryKey = 'id_pays';
    protected $fillable = [
        'nom_url',
        'nom_normale',
        'code_pays',
        'utilisateur_id',
        'statut_pays'
    ];

    
    
    public static $rulesCreation = [

        'nom_correct_pays' => 'required|string|min:2|max:155',
        
    ];

     
    public static $rulesEntete = [

        'entete_choix' => 'required|in:video,image_dynamique,image_statique,rien',
    ];

     
    public static $rulesCode = [

        'code_pays' => 'required|string|max:5',
        
    ];

     
    public static $customCreation = [

        'nom_correct_pays.required' => 'Le nom et prenom est requis.',
        'nom_correct_pays.string' => 'Le nom et prenom doit être une chaîne de caractères.',
        'nom_correct_pays.min' => 'Le nom et prenom doit etre au minimun 2 caractères.',
        'nom_correct_pays.max' => 'Le nom et prenom ne doit pas dépasser 155 caractères.',

    ];

    
    public static $customEntete = [
        
        'entete_choix.required' => "L'entete de l'acceuil est requis.",
        'entete_choix.in' => "L'entete de l'acceuil doit être une chaîne de caractères.",

    ];

    public static $customCode = [
        
        'code_pays.required' => "Le code du pays est requis.",
        'code_pays.in' => "Le code du pays doit être une chaîne de caractères.",

    ];
}
