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
}
