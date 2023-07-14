<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cooperation extends Model
{
    protected $fillable = [
        'type',
        'institution',
        'intervenant',
        'dateDebut',
        'dateFin',
        'sujet',
        'idFile',
      ];
}
