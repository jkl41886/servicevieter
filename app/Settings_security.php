<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings_security extends Model
{
    //
    protected $fillable = [
        'email', 'question', 'answer'
    ];
}
