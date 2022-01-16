<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {

            $table->integer('codigo')->primary();
            $table->integer('centro_codigo');
            $table->integer('empleado_codigo');
            $table->integer('especialidad_codigo');
            $table->date('fecha');
            $table->time('hora');
            $table->string('paciente');
            $table->foreign('centro_codigo')->references('codigo')->on('centro');
            $table->foreign('empleado_codigo')->references('codigo')->on('empleado');
            $table->foreign('especialidad_codigo')->references('codigo')->on('especialidad');




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
        Schema::dropIfExists('consultas');
    }
}
