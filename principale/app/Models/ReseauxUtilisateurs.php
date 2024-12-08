<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AppareilUtilisateurs;

class ReseauxUtilisateurs extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'reseaux_utilisateurs';
    protected $primaryKey = 'id_reseaux_utilisateur';
    protected $fillable = [
        'ip_address',
        'securite',
        'utilisateur_id'
    ];
    
    public function appareilUtilisateurs()
    {
        return $this->hasMany(AppareilUtilisateurs::class, 'reseaux_utilisateur_id', 'id_reseaux_utilisateur');
    }
}
