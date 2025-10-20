<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'produto',
        'codigo',
        'data_de_recebimento',
        'preço_unitario',
    ];
}
