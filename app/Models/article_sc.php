<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article_sc extends Model
{
    protected $fillable = ['type', 'annee', 'titre' , 'lienDOI' , 'idFile' , 'datePublication', 'titreJournal', 'quartileJournal' , 'volume' , 'facteur' , 'indexation' , 'siteRevue'];
}
