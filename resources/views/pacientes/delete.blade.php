@extends('template.app')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-danger">
            <div class="panel-heading">Deletar</div>
            <div class="panel-body">
                Deseja deletar o paciente <strong>{{$paciente->nome}}</strong>?
                <div class="text-right">
                    <a href="{{url("/pacientes/$paciente->id/post_delete")}}" class="btn btn-danger">Excluir</a>
                    <a href="{{url("/pacientes")}}" class="btn btn-default">Cancelar</a>
                </div>
            </div>

        </div>

    </div>

@endsection