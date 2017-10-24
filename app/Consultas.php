<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    protected $fillable = [

        'id',
        'paciente_id',
        'data',
        'hora',
        'situacao_id'
    ];

    protected $table = 'consultas';

}
