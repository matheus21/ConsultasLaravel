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

    public function consultas() {
        return $this->hasMany(Consulta::class, 'situacao_id');
    }
}
