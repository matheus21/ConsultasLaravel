<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SituacaoConsulta extends Model
{
    protected $fillable = [
        'id',
        'nome'
    ];

    protected $table = 'situacao_consultas';
}
