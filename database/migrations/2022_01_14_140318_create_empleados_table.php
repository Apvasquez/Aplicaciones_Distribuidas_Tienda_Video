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

            $table->integer('codigo')->primary();
            $table->string('nombre');
            $table->string('direccion');
            $table->date('fecha_entrada');
            $table->integer('centro_codigo');


            // $table->foreign('transportista')->references('ID_T')->on('transportistas');

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
