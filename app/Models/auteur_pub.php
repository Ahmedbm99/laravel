<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auteur_pub extends Model
{
    protected $fillable = ['type', 'titre', 'auteur' , 'mail_auteur' , 'date' , 'soummissionnaire', 'approve'];

}
