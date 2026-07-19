<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Financia extends Model
{
    protected $fillable = [
        'descricao',
        'tipo',
        'valor',
        'data_de_pagamento',
    ];
    use HasFactory;
}