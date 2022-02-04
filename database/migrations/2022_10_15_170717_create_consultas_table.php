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

            $table->bigIncrements('id');
            $table->unsignedBigInteger('centro_codigo');
            $table->unsignedBigInteger('empleado_codigo');
            $table->unsignedBigInteger('especialidad_codigo');
            $table->date('fecha');
            $table->time('hora');
            $table->string('paciente');
            $table->foreign('empleado_codigo')->references('id')->on('empleados');
            $table->foreign('especialidad_codigo')->references('id')->on('especialidades');
            $table->foreign('centro_codigo')->references('id')->on('centros');





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
