<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'quartier_id'];

    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    }

    public function agences()
    {
        return $this->hasMany(Agence::class);
    }
}
