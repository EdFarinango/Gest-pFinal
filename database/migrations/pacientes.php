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
    CEDULAP              varchar(10) not null,
   COD_ROLA2            int not null,
   ID_SV                int not null,
   IDP                  numeric(2,0) not null,
   NOMBREP              varchar(64) not null,
   APELLIDOP            varchar(64) not null,
   TELFP                varchar(10) not null,
   DIRECCIONP           text not null,
   NACIONALIDADP        varchar(15) not null,
   GENEROP              varchar(8) not null,
   ESTADO_CIVILP        varchar(20) not null,
   LUGAR_NACP           varchar(25) not null,
   TIPO_SEGUROP         varchar(10) not null,
   NIV_INSTRUCCIONP     varchar(25) not null,
   FECHA_NACP           date not null,
   primary key (CEDULAP)*/
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {

            $table->increments('id');

            $table->string('cedulap', 10);

            $table->integer('idp');
            $table->string('nombrep', 64);
            $table->string('apellidop', 64);
            $table->string('telfp', 10);
            $table->text('direccionp');
            $table->string('nacionalidadp', 15);
            $table->string('generop', 8);
            $table->string('estado_civilp', 20);
            $table->string('lugar_nacp', 25);
            $table->string('tipo_segurop', 10);
            $table->string('niv_instruccionp', 25);
            $table->date('fecha_nacp');
            $table->timestamps();

            $table->integer('codRolD')->unsigned();
            $table->foreign('codRolD')->references('id')->on('doctors');




            
            $table->integer('codRolEnf')->unsigned();
            $table->foreign('codRolEnf')->references('id')->on('enfermeros');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
};
