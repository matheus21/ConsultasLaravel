@extends('template.app')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Editar paciente</div>
            <div class="panel-body">
                <form action="{{ url('pacientes/post_edit')}}" method="POST">
                    {{csrf_field()}}
                    <div class="col-md-6 form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" value="{{$paciente->nome}}" name="nome" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" value="{{$paciente->cpf}}" name="cpf" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="cns">CNS</label>
                        <input type="text" id="cns" value="{{$paciente->cns}}" name="cns" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" value="{{$paciente->senha}}" name="senha"
                               class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" value="{{$paciente->email}}" name="email" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" id="telefone" value="{{$paciente->telefone}}" name="telefone"
                               class="form-control"/>
                    </div>

                    <input type="hidden" name="id" value="{{$paciente->id}}">

                    <div class="text-right col-md-12">
                        <input type="submit" class="btn btn-primary" value="Salvar"/>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection