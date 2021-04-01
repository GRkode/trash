<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZoneAgence extends Model
{
    protected $fillable = ['zone_id', 'entreprise_id'];
    protected $table = "zone_entreprises";

    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
