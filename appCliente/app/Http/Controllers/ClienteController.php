<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Pagination\Paginator;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = \App\Models\Cliente::paginate(15);

        Paginator::useBootstrap();

        return view('clientes.index',compact('clientes'));
    }

    public function adicionar()
    {
        return view('clientes.adicionar');
    }
    public function salvar(Request $request)
    {
        \App\Models\Cliente::create($request->all());

        \Session::flash('flash_message',[
            'msg' => "Cliente adicionado com sucesso!",
            'class' => "alert-success"
            ]);

        return redirect()->route('clientes.adicionar');
    }
}
