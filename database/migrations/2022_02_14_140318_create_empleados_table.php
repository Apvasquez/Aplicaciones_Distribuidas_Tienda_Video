<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {

            $table->integer('codigo')->primary()->unique();
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('salario');
            $table->date('fecha_entrada');
            $table->integer('centro_codigo');
            // $table->integer('medico_codigo');
            $table->foreign('centro_codigo')->references('codigo')->on('centro');
            // $table->foreign('medico_codigo')->references('codigo')->on('medico');


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
        Schema::dropIfExists('empleado');
    }
}
