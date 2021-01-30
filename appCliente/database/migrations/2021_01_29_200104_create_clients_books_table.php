<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_livros', function (Blueprint $table) {
            $table->unsignedBigInteger('clientes_id');
            $table->unsignedBigInteger('livros_id');
        });
        Schema::table('clientes_livros', function (Blueprint $table) {
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->foreign('livros_id')->references('id')->on('livros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes_livros');
    }
}
