<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conference_manifestation extends Model
{
    protected $fillable = ['titre', 'lieu', 'prix' , 'dateDebut' , 'dateFin' , 'classe'  ];
}
