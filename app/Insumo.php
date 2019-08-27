<?php

namespace restaurapp;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = [
        'name', 'stock', 'precio_compra',
    ];
}
