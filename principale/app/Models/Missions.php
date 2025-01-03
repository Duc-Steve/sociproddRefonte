<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Missions extends Model
{
    //
    use HasFactory, HasUuids;

    protected $table = 'missions';
    protected $primaryKey = 'id_mission';
    protected $fillable = [
        'nom_mission',
        'utilisateur_id',
        'statut_mission'
    ];

    
    
    
    public static $rulesCreation = [

        'nom_mission' => 'required|string|min:20|max:455',
        
    ];
    public static $customCreation = [

        'nom_mission.required' => 'Le nom de la mission est requis.',
        'nom_mission.string' => 'Le nom de la mission doit être une chaîne de caractères.',
        'nom_mission.min' => 'Le nom de la mission doit etre au minimun 20 caractères.',
        'nom_mission.max' => 'Le nom de la mission ne doit pas dépasser 455 caractères.',

    ];
}
