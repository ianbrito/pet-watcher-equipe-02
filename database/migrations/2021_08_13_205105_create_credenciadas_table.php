<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredenciadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credenciadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cnpj')->unique();
            $table->string('inscricao_estadual');
            $table->string('razao_social');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('endereco');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credenciadas');
    }
}
