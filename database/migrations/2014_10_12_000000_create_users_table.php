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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula', 10);
            $table->string('nombre', 64);
            $table->string('apellido', 64);
            $table->text('direccion');
            $table->string('telefono', 10);
            $table->date('fecha_nacimiento');
            $table->string('genero', 20);
            $table->string('especialidad', 64);
            $table->string('nombre_usuario', 64);
            $table->string('password', 10);
            $table->string('rol', 10);





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
