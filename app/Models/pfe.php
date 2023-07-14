<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pfe extends Model
{
    protected $fillable = [
        'titre',
        'descriptions',
        'encadrant' ,
        'co-encadrant' ,
        'institution' ,
        'etudiant' ,
        'dateDebut' ,
        'dateFin' ,
        'idFile',
];
    use HasFactory;
}
