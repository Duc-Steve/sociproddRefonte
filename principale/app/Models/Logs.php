<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'logs';
    protected $primaryKey = 'id_log';
    protected $fillable = [
        'action',
        'table_name',
        'record_id',
        'old_data',
        'new_data',
        'action_date',
    ];
}
