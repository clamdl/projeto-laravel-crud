<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['nome','telefone', 'foto'];

    public function listaclientes()
    {
        return $this->all();
    }

    public function livros()
    {
        return $this->belongsToMany('App\Models\Book', 'clientes_livros','clientes_id', 'livros_id');
    }
    public function addLivro(Livro $livro)
    {
        return $this->livros()->save($livro);
    }

}
