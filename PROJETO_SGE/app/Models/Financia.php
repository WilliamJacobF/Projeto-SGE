<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Financia extends Model
{
    protected $fillable = [
        'descricao',
        'tipo',
        'valor',
        'data_de_pagamento',
    ];
}
