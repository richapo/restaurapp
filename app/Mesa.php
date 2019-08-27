<?php

namespace restaurapp;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [
        'capacidad_personas',
    ];
}
