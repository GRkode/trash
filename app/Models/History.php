<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['etat', 'poubelle_id', 'zone_id'];

}
