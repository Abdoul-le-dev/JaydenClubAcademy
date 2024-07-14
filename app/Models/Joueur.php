<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'date_de_naissance',
        'nationalite',
        'photo',
        'position_sur_terrain',
        'numero',
        'objectif',
        'style_de_jeu',
    ];
}
