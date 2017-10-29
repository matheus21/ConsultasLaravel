@extends('template.app')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Consultas</div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Paciente</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Situação</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($consultas as $consulta)
                        <tr>
                            <td>{{$consulta->paciente->nome}}</td>
                            <?php
                                $data = new DateTime($consulta->data);
                            ?>
                            <td><?= $data->format('d/m/Y'); ?></td>
                            <td>{{$consulta->hora}}</td>
                            <td>{{$consulta->situacao_consulta->nome}}</td>
                            <td><a href="{{url("consultas/$consulta->id/edit")}}" title="Editar"
                                   class="btn btn-warning btn-sm"><span
                                            class="glyphicon glyphicon glyphicon-edit"></span></a>
                            </td>
                            <td><a href="{{url("consultas/$consulta->id/delete")}}" title="Excluir"
                                   class="btn btn-danger btn-sm"><span
                                            class="glyphicon glyphicon glyphicon-remove"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{url("consultas/$paciente_id/add")}}" class="btn btn-primary">Nova Consulta</a>

    </div>

@endsection