<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'projets';
    protected $primaryKey = 'id_projet';
    protected $fillable = [
        'description',
        'nom_pdf',
        'lien_pdf',
        'type_projet',
        'element_id',
        'utilisateur_id',
        'statut_projet'
    ];

    
    // règle pour le Statut
    public static $rulesStatut = [

        'statut_projet' => 'required|in:en cours,terminer,en attente de financement',
    ];

    // règle pour la description
    public static $rulesDescription = [

        'description' => 'required|string|max:1500',
    ];

    
    // règle pour le pdf
    public static $rulesPdf = [
    
        'pdf_rapport' => 'required|file|max:30720|mimes:pdf', // Limite à 30 Mo (1024 Ko * 30),
    ];

    
    
    public static $customPdf = [
        'pdf_rapport.required' => 'Le rapport est obligatoire.',
        'pdf_rapport.file' => 'Le rapport doit être un fichier.',
        'pdf_rapport.max' => 'Le fichier ne doit pas dépasser 30 Mo.',
        'pdf_rapport.mimes' => 'Le fichier doit être de type : pdf.',
    ];
    
    public static $customDescription = [

        'description.required' => 'La description est requis.',
        'description.string' => 'La description doit être une chaîne de caractères.',
        'description.max' => 'La description ne doit pas dépasser 1500 caractères.',

    ];
    
    public static $customStatut = [

        'statut_projet.required' => "Le statut du projet est requis.",
        'statut_projet.in' => "Le statut du projet doit être une chaîne de caractères.",

    ];

    // règle pour le type de projet
    public static $rulesType = [

        'type_projet' => 'required|in:humanitaire,sociale',
    ];

    
    public static $customType = [

        'type_projet.required' => "Le type du projet est requis.",
        'type_projet.in' => "Le type du projet doit être une chaîne de caractères.",

    ];
}
