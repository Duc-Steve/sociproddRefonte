<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interfaces extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'interfaces';
    protected $primaryKey = 'id_interface';
    protected $fillable = [
        'video',
        'image_dynamique',
        'image_statique',
        'projet',
        'actualite',
        'podcast',
        'reportage',
        'membre_executif',
        'coordonnee',
        'contact',
        'newsletter',
        'commentaire',
        'pays_id',
        'utilisateur_id'
    ];
}
