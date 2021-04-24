<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['etat', 'poubelle_id', 'zone_id'];

    public function poubelle()
    {
        return $this->belongsTo(Poubelle::class);
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
