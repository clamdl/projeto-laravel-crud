@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

            <ol class="breadcrumb panel-heading">
                    <li class="active">Clientes</li>
                </ol>

                <div class="panel-body">
                    <p>
                    <a class="btn btn-info" href="{{route('clientes.adicionar')}}">Adicionar</a>
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
                                    <a class="btn btn-default" href="{{route('clientes.editar', $cliente->id)}}">Editar</a>

                                    <div>
                                    <form action="{{ route('clientes.deletar', $cliente->id)}}"method="post">
                                    {{ csrf_field()}}
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger delete-btn">Deletar</a>
                                    </form>
                                    </div>

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