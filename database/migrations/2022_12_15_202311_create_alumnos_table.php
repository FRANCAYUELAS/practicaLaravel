<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creamos la tabla de alumnos
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 32);
            $table->string('telefono', 16)->nullable();
            $table->unsignedInteger('edad')->nullable();
            $table->string('password', 64);
            $table->string('email', 64)->unique()->nullable();
            $table->string('sexo', 16)->nullable();
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
        Schema::dropIfExists('alumnos');
    }
};
