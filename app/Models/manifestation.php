<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manifestation extends Model
{
    protected $fillable = ['type', 'titre', 'dateDebut' , 'dateFin' ];
    use HasFactory;
}
