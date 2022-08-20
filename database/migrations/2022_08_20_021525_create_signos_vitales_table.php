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
        Schema::create('signos_vitales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('temp', 10);
            $table->string('presionart', 10);
            $table->string('freccard', 10);
            $table->string('frecrresp', 10);
            $table->string('prioridad', 1);
            $table->string('especialidadp', 64);
            $table->string('tiempoespera', 4);
            $table->timestamps();

            $table->integer('cedulap')->unsigned();
            $table->foreign('cedulap')->references('id')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signos_vitales');
    }
};
