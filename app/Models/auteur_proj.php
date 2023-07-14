<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auteur_proj extends Model
{
    protected $fillable = [
        'type',
        'titre',
        'encadrant',
        'mail_encadrant',
        'date',
        'soummissionnaire',
        'approve',
    ];

}
