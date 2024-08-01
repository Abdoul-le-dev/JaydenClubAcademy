<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officiel extends Model
{
    use HasFactory;



    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'fonction',
        'photo',
        'description',
    ];
}
