<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppareilUtilisateurs extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'appareil_utilisateurs';
    protected $primaryKey = 'id_appareil_utilisateur';
    protected $fillable = [
        'user_agent',
        'systeme_exploitation', // Combine 'type_systeme_dexploitation' et 'version_systeme_dexploitation' dans une seule colonne
        'navigateur', // Combine 'type_navigateur' et 'version_navigateur' dans une seule colonne
        'appareil',  // Combine 'type_appareil', 'marque_appareil' et 'model_appareil' dans une seule colonne
        'reseaux_utilisateur_id',
    ];
}
