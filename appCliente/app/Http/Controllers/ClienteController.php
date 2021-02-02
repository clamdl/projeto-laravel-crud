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
    public function editar($id)
    {
        $cliente = \App\Models\Cliente::find($id);

        if(!$cliente){
            \Session::flash('flash_message',[
                'msg' => "Não existe esse cliente cadastrado! Deseja cadastrar um novo cliente?",
                'class' => "alert-danger"
                ]);
            
            return redirect()->route('clientes.adicionar');
            }

        return view('clientes.editar', compact('cliente'));
    }
    public function atualizar(Request $request, $id)
    {
        \App\Models\Cliente::find($id)->update($request->all());

       
            \Session::flash('flash_message',[
                'msg' => "Cliente atualizado com sucesso!",
                'class' => "alert-success"
                ]);
            
            return redirect()->route('clientes');
            }
}

