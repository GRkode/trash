<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arrondissement extends Model
{
    protected $fillable = [
        'title', 'commune_id'
    ];

    public $timestamps = false;

    public function quartiers(){
        return $this->hasMany(Quartier::class);
    }

    public function commune(){
        return $this->belongsTo(Commune::class);
    }
}
