<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    protected $fillable = ['titre', 'description', 'lieu' , 'prix' , 'dateDebut' , 'dateFin'   ];

}
