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
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->increments('id');


            $table->string('d_inicial', 100);
            $table->string('d_final', 100);
            $table->string('observaciones', 100);
            $table->timestamps();

            $table->integer('id_paciente')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('pacientes');

            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosticos');
    }
};
