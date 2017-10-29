<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = [

        'id',
        'paciente_id',
        'data',
        'hora',
        'situacao_id'
    ];

    protected $table = 'consultas';

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    public function situacao_consulta()
    {
        return $this->belongsTo(SituacaoConsulta::class, 'situacao_id');
    }

}
