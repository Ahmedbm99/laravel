<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = ['nom',
        'prenom' ,
        'email' ,
        'password' ,
        'dateNaissance' ,
        'telephone' ,
        'cin' ,
];

    use HasFactory;
}
