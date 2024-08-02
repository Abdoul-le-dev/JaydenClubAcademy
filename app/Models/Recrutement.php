<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recrutement extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'prenom',
        'date',
        'genre',
        'residence',
        'nationnalite',
        'message1',
        'message2',
        'message3',
        'email',
        'telephone',
    ];
}
