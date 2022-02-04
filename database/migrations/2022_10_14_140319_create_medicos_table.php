<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('funcion');
            $table->string('experiencia');
            $table->unsignedBigInteger('empleado_codigo');
            $table->foreign('empleado_codigo')->references('id')->on('empleados')->onDelete('cascade');







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
        Schema::dropIfExists('medico');
    }
}
