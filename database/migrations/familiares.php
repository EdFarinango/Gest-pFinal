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

     /*
      ID_F                 numeric(2,0) not null,
   CEDULAP              varchar(10),
   NOMBRECOMPLETOF      varchar(64) not null,
   TELEFONOF            varchar(10) not null,
   DIRECCIONF           text not null,
   TIPO_FAMILIAR        varchar(10) not null,
   PARROQUIAF           varchar(20) not null,
   primary key (ID_F)*/
    public function up()
    {
        Schema::create('familiares', function (Blueprint $table) {

            $table->increments('id');

            $table->string('nombrecompletof', 64);
            $table->string('telefonof', 10);
            $table->text('direccionf');
            $table->string('tipo_familiar', 10);
            $table->string('parroquiaf', 20);
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
        Schema::dropIfExists('familiares');
    }
};
