@extends('template.app')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Editar Consulta</div>
            <div class="panel-body">
                <form action="{{ url('consultas/post_edit')}}" method="POST">
                    {{csrf_field()}}
                    <div class="col-md-6 form-group">
                        <label for="data">Data</label>
                        <input type="date" required id="data" name="data" value="{{$consulta->data}}"
                               class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="hora">Hora</label>
                        <input type="time" required id="hora" name="hora" value="{{$consulta->hora}}"
                               class="form-control"/>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="situacao_id">Situação</label>
                        <select name="situacao_id" class="form-control">
                            <option value="">Selecione</option>
                            @foreach($situacao_consultas as $situacao)
                                @if($consulta->situacao_id == $situacao->id)
                                    <option value="{{$situacao->id}}" selected>{{$situacao->nome}}</option>
                                @else
                                    <option value="{{$situacao->id}}">{{$situacao->nome}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <!-- <div class="col-md-6 form-group">
                        <label for="paciente_id">Paciente</label>
                        <select name="paciente_id" class="form-control">
                            <option value="">Selecione</option>
                            @foreach($pacientes as $paciente)
                                @if($consulta->paciente_id == $paciente->id)
                                    <option value="{{$paciente->id}}" selected>{{$paciente->nome}}</option>
                                @else
                                    <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div> -->

                    <input type="hidden" name="id" value="{{$consulta->id}}">

                    <div class="text-right col-md-12">
                        <input type="submit" class="btn btn-primary" value="Salvar"/>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection