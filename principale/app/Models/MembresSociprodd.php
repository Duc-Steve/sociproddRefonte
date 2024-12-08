<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembresSociprodd extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'membres_sociprodd';
    protected $primaryKey = 'id_membre_sociprodd';
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'whatsapp',
        'numeros_piece_identite',
        'matricule_sociprodd',
        'nom_dossier',
        'lien_dossier',
        'nom_certificat',
        'lien_certificat',
        'type_piece_identite',
        'pays_id',
        'utilisateur_id',
        'statut_membre_sociprodd'
    ];
}
