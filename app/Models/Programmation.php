<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programmation extends Model
{
    protected $fillable = [
        'date_debut', 'agence_id', 'date_fin', 'zone_id', 'jours'
    ];


    public function zone(){
        return $this->belongsTo(Zone::class);
    }

    public function agence(){
        return $this->belongsTo(Agence::class);
    }
}
