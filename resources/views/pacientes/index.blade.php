@extends('template.app')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Pacientes</div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>CNS</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pacientes as $paciente)
                        <tr>
                            <td>{{$paciente->nome}}</td>
                            <td>{{$paciente->cpf}}</td>
                            <td>{{$paciente->cns}}</td>
                            <td>{{$paciente->email}}</td>
                            <td>{{$paciente->telefone}}</td>
                            <td><a href="{{url("pacientes/$paciente->id/edit")}}" title="Editar"
                                   class="btn btn-warning btn-sm"><span
                                            class="glyphicon glyphicon glyphicon-edit"></span></a>
                            </td>
                            <td><a href="{{url("pacientes/$paciente->id/delete")}}" title="Excluir"
                                   class="btn btn-danger btn-sm"><span
                                            class="glyphicon glyphicon glyphicon-remove"></span></a>
                            </td>
                            <td><a href="{{url("consultas/$paciente->id")}}" title="Consultas"
                                   class="btn btn-primary btn-sm"><span
                                            class="glyphicon glyphicon glyphicon-plus"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{url('pacientes/add')}}" class="btn btn-primary">Novo Paciente</a>

    </div>

@endsection