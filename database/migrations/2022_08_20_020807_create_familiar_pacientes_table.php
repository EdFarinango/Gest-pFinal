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
        Schema::create('familiar_pacientes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombrecompletof', 64);
            $table->string('telefonof', 10);
            $table->text('direccionf');
            $table->string('tipo_familiar', 10);
            $table->string('parroquiaf', 20);


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
        Schema::dropIfExists('familiar_pacientes');
    }
};
