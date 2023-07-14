<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titre extends Model
{
    protected $fillable = [
        'mail',
        'code',
        'confirme',
    ];

    use HasFactory;
}
