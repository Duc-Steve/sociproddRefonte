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
}
