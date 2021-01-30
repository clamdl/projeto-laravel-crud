<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'quantidade', 'valor'];

    public function clientes()
    {
        return $this->belongsToMany('App\Models\Client', 'clientes_livros', 'livros_id','clientes_id');
    }

}
