<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('centro', function (Blueprint $table) {
           $table->id();
            $table->integer('codigo');
            $table->string('nombre');       // For MySQL 8.0 use string('name', 125);
            $table->string('direccion');
            $table->string('telefono');       // For MySQL 8.0 use string('name', 125); 
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
        Schema::dropIfExists('centro');
    }
}
