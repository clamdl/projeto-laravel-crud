@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('clientes') }}">Clientes</a></li>
                    <li class="active">Adicionar</li>
                </ol>

                <div class="panel-body">

                <form action="{{ route('clientes.salvar')}}" method="post">
                {{ csrf_field()}}
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="Nome completo do cliente">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Telefone de contato">
                    </div>
                        <button class="btn btn-info">Adicionar</button>
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection