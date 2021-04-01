<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable = [
        'name', 'address', 'phone', 'email', 'zone_id'
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function programmes()
    {
        return $this->hasMany(Programmation::class);
    }

}
