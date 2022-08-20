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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cedulap', 10);

            $table->string('nombrep', 64);
            $table->string('apellidop', 64);
            $table->string('telfp', 10);
            $table->text('direccionp');
            $table->string('nacionalidadp', 15);
            $table->string('generop', 10);
            $table->string('estado_civilp', 20);
            $table->string('lugar_nacp', 25);
            $table->string('tipo_segurop', 10);
            $table->string('niv_instruccionp', 25);
            $table->date('fecha_nacp');
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
