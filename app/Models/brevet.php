<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brevet extends Model
{
    protected $fillable = ['titre', 'annee', 'idFile' , 'sujet' , 'date' ];

}
