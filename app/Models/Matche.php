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

    public function equipeA()
    {
        return $this->belongsTo(Equipe::class,'equipe_a');
    }
    public function equipeB()
    {
        return $this->belongsTo(Equipe::class,'equipe_b');
    }

    public function resultat()
    {
        $result=MatchResultat::where('match_id',$this->id)->first();
        if($result!=null){
            return $result;
        }
        return null;
    }

}
