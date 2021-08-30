<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_aquisicao');
            $table->unsignedBigInteger('proprietario_id');
            $table->foreign('proprietario_id')->references('id')->on('proprietarios');
            $table->string('nome');
            $table->string('microship')->unique();
            $table->string('especie');
            $table->timestamp('data_nascimento');
            $table->string('fase');
            $table->string('porte');
            $table->string('sexo');
            $table->string('pedigree')->nullable();
            $table->string('codigo_pedigree')->nullable();
            $table->string('origem_pedigree')->nullable();
            $table->timestamp('data_cadastro')->useCurrent();
            $table->unsignedBigInteger('credenciada_id');
            $table->foreign('credenciada_id')->references('id')->on('credenciadas');
            $table->boolean('ativo')->default(true);
            $table->string('motivo_desativacao')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('animais');
    }
}
