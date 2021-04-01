<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'name', 'logo', 'address', 'phone',
        'email', 'facebook', 'twitter', 'youtube'
    ];

    public $timestamps = false;
}
