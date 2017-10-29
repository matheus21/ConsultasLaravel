@extends('template.app')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-danger">
            <div class="panel-heading">Deletar</div>
            <div class="panel-body">
                Deseja deletar a consulta?
                <div class="text-right">
                    <a href="{{url("/consultas/$consulta->id/post_delete")}}" class="btn btn-danger">Excluir</a>
                    <a href="{{url("/consultas")}}" class="btn btn-default">Cancelar</a>
                </div>
            </div>

        </div>

    </div>

@endsection