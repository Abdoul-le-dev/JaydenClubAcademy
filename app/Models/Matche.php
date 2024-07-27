<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
    protected $fillable = [
        'equipe_a',
        'equipe_b',
        'match_date',
        'start_date',
        'end_date',
        'terrain'
    ];
}
