<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'quantidade', 'valor'];

    public function clientes()
    {
        return $this->belongsToMany('App\Models\Cliente', 'clientes_livros', 'livros_id','clientes_id');
    }
    public function addCliente(Cliente $cliente)
    {
        return $this->clientes()->save($cliente);
    }
}
