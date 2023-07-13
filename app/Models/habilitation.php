<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habilitation extends Model
{
    protected $fillable = ['titre', 'titulaire_habilitation', 'annee' , 'encadrant' , 'idFile' ];
    use HasFactory;
}
