<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{

    protected $fillable = [
        'title', 'arrondissement_id'
    ];

    public $timestamps = false;

    public function zones(){
        return $this->hasMany(Zone::class);
    }

    public function arrondissement(){
        return $this->belongsTo(Arrondissement::class);
    }
}
