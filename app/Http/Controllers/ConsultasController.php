<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\Paciente;
use App\SituacaoConsulta;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{

    public function index($id)
    {
        $list_consultas = Consulta::where('paciente_id', $id)
            ->get();
        return view('consultas.index', [
            'consultas' => $list_consultas,
            'paciente_id' => $id
        ]);
    }

    public function add($id)
    {

        $list_pacientes = Paciente::get();
        $list_situacao_consultas = SituacaoConsulta::all();
        return view('consultas.add', [
            'situacao_consultas' => $list_situacao_consultas,
            'pacientes' => $list_pacientes,
            'paciente_id' => $id
        ]);
    }

    public function post_add(Request $request)
    {
        Consulta::create($request->all());
        return redirect("/consultas/$request->paciente_id");
    }

    public function edit($id)
    {
        $list_pacientes = Paciente::all();
        $list_situacao_consultas = SituacaoConsulta::all();
        return view('consultas.edit', [
            'consulta' => $this->getConsulta($id),
            'situacao_consultas' => $list_situacao_consultas,
            'pacientes' => $list_pacientes
        ]);
    }


    public function post_edit(Request $request)
    {

        $consulta = $this->getConsulta($request->id);
        $consulta->update($request->all());
        return redirect("/consultas/$consulta->paciente_id");

    }

    public function delete($id)
    {
        return view('consultas.delete', [
            'consulta' => $this->getConsulta($id)
        ]);
    }

    public function post_delete($id)
    {

        $consulta = $this->getConsulta($id);
        $paciente_id = $consulta->paciente_id;
        $consulta->delete();
        return redirect("/consultas/$paciente_id");
    }

    public function getConsulta($id)
    {
        $consulta = new Consulta();
        return $consulta->find($id);
    }
}
