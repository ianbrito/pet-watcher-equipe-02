<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_credenciada');
            $table->foreign('id_credenciada')->references('id')->on('credenciadas');
            $table->date('data_licenciamento');
            $table->date('data_vencimento');
            $table->boolean('ativo')->default(true);
            $table->string('cnpj');
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
        Schema::dropIfExists('licencas');
    }
}
