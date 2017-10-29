<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
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

    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'paciente_id');
    }
}
