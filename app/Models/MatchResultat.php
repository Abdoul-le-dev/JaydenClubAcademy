<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchResultat extends Model
{
    use HasFactory;

    protected $fillable = [
        'score_a',
        'score_b',
        'match_id'
    ];
}
