<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ouvrage_sc extends Model
{
    protected $fillable = [
        'type',
        'annee',
        'titre',
        'editeur',
        'lienEditeur',
        'ISBN/Issn',
        'date',
 ];
    use HasFactory;
}
