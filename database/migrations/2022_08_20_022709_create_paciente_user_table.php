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
        Schema::create('paciente_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_paciente')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente_user');
    }
};
