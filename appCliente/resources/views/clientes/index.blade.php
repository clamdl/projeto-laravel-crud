@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Bem-Vindo</div>

                <div class="panel-body">
                    <p>Sistema de gerenciamento de Clientes!</p>
                    <p>
                    <a class="btn btn-info" href="#">Adicionar</a>
                    </p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <th scope="row">{{ $cliente->id }}</th>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->telefone }}</td>

                                <td>
                                    <a class="btn btn-default" href="#">Editar</a>
                                    <a class="btn btn-danger" href="#">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!!$clientes->links()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection