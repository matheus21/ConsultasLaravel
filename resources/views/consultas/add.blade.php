@extends('template.app')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Adicionar consulta</div>
            <div class="panel-body">
                <form action="{{ url('consultas/post_add')}}" method="POST">
                    {{csrf_field()}}
                    <div class="col-md-6 form-group">
                        <label for="data">Data</label>
                        <input type="date" required id="data" name="data" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="hora">Hora</label>
                        <input type="time" required id="hora" name="hora" class="form-control"/>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="situacao_id">Situação</label>
                        <select name="situacao_id" class="form-control">
                            <option value="">Selecione</option>
                            @foreach($situacao_consultas as $situacao)
                                <option value="{{$situacao->id}}">{{$situacao->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- <div class="col-md-6 form-group">
                        <label for="paciente_id">Paciente</label>
                        <select name="paciente_id" class="form-control">
                            <option value="">Selecione</option>
                            @foreach($pacientes as $paciente)
                                <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
                            @endforeach
                        </select>
                    </div> -->

                    <input type="hidden" name="paciente_id" value="{{$paciente_id}}"/>

                    <div class="text-right col-md-12">
                        <input type="submit" class="btn btn-primary" value="Salvar"/>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection