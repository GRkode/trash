<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $fillable = ['title', 'departement_id'];

    public $timestamps = false;

    public function departement(){
        return $this->belongsTo(departement::class);
    }

    public function arrondissements(){
        return $this->hasMany(Arrondissement::class);
    }
}
