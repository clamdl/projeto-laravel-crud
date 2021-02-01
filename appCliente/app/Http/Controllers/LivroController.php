<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{

        public function index()
        {
            $livros = \App\Models\Livro::all();
    
            return view('livros.index',compact('livros'));
        }
    
}
