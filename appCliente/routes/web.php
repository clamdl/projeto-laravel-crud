<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LivroController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');
    Route::get('livros', [LivroController::class, 'index'])->name('livros');
    Route::get('/clientes/adicionar', [ClienteController::class, 'adicionar'])->name('clientes.adicionar');
    Route::post('/clientes/salvar', [ClienteController::class, 'salvar'])->name('clientes.salvar');
    Route::get('/clientes/editar/{id}', [ClienteController::class, 'editar'])->name('clientes.editar');
    Route::put('/clientes/atualizar/{id}', [ClienteController::class, 'atualizar'])->name('clientes.atualizar');
    Route::delete('/clientes/deletar/{id}', [ClienteController::class, 'deletar'])->name('clientes.deletar');

    
});




