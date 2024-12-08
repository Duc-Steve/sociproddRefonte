<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'commentaires';
    protected $primaryKey = 'id_commentaire';
    protected $fillable = [
        'nom_prenom',
        'adresse_mail',
        'description',
        'element_id',
        'pays_id',
        'statut_commentaire'
    ];
}
