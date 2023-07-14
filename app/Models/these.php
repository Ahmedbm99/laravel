<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class these extends Model
{
    protected $fillable = [
        'titre',
        'annee',
        'memoire',
        'sujet',
        'anneeInscription',
 ];
    use HasFactory;
}
