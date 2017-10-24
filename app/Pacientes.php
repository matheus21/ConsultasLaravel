<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'cns',
        'senha',
        'email',
        'telefone'
    ];

    protected $table = 'pacientes';
}
