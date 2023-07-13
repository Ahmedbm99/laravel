<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membres extends Model
{
    protected $fillable = ['nom', 'prenom', 'cin' , 'passport' , 'cnrps' , 'grade' , 'email' , 'password' , 'specialite' , 'diplome' , 'dateNaissence' , 'fonctionAdministrative' , 'h-index' , 'orcid' , 'telephoneMobile' , 'telephoneFax' , 'linkedin' , 'scholar' , 'dateDernierDiplome' , 'description' , 'verify_token' , 'verify_status' , 'approve' , 'code' , 'etat' , 'idFile'  ];

    use HasFactory;
}
