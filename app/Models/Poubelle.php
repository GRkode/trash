<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Poubelle extends Model
{

    protected $fillable = [
        'numero', 'public', 'latitude', 'longitude', 'zone_id', 'departement_id',
        'commune_id', 'arrondissement_id', 'quartier_id'
    ];
    protected $appends = ['created_at'];

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->age;
    }

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    public function arrondissement()
    {
        return $this->belongsTo(Arrondissement::class);
    }

    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    public function history()
    {
        return $this->hasOne(History::class)->latest('id');
    }
}
