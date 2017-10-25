@extends('template.app')

@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Adicionar paciente</div>
            <div class="panel-body">
                <form action="{{ url('pacientes/post_add')}}" method="POST">
                    {{csrf_field()}}
                    <div class="col-md-6 form-group">
                        <label for="nome">Nome</label>
                        <input type="text" required id="nome" name="nome" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" required id="cpf" name="cpf" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="cns">CNS</label>
                        <input type="text" required id="nome" name="cns" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="senha">Senha</label>
                        <input type="password" required id="senha" name="senha" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="email">Email</label>
                        <input type="text" required id="email" name="email" class="form-control"/>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" required id="telefone" name="telefone" class="form-control"/>
                    </div>

                    <div class="text-right col-md-12">
                        <input type="submit" class="btn btn-primary" value="Salvar"/>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection