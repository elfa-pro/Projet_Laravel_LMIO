<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnes extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'adresse',
        'telephone',
        'email',
        'password',
    ];
}
