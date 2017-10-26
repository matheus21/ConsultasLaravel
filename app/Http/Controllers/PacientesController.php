<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function index()
    {
        $list_pacientes = Paciente::all();
        return view('pacientes.index', [
            'pacientes' => $list_pacientes
        ]);
    }

    public function add()
    {
        return view('pacientes.add');
    }

    public function post_add(Request $request)
    {
        Paciente::create($request->all());
        return redirect('/pacientes');
    }


    public function edit($id)
    {
        return view('pacientes.edit', [
            'paciente' => $this->getPaciente($id)
        ]);
    }

    public function post_edit(Request $request) {

        $paciente = $this->getPaciente($request->id);
        $paciente->update($request->all());
        return redirect('/pacientes');

    }

    public function getPaciente($id)
    {
        $paciente = new Paciente();
        return $paciente->find($id);
    }

    public function delete($id) {

        return view('pacientes.delete', [
            'paciente' => $this->getPaciente($id)
        ]);

    }

    public function post_delete($id) {

        $this->getPaciente($id)->delete();
        return redirect('/pacientes');

    }
}
