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
        Schema::create('empleados', function (Blueprint $table) {

            $table->bigIncrements('id')->unique();
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('salario');
            $table->date('fecha_entrada');
            $table->unsignedBigInteger('centro_codigo');
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
        Schema::dropIfExists('empleados');
    }
}
