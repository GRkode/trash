<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = ['title'];

    public $timestamps = false;

    public function communes(){
        return $this->hasMany( commune::class);
    }
}
