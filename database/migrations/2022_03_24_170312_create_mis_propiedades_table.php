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
        Schema::create('mis_propiedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('duenios');
            $table->string('tipo_propiedad');
            $table->string('estado');
            $table->integer('cantidad');
            $table->timestamps(); //metodo que crea dos campos uno para la fecha de creación y la actualización.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mis_propiedades');
    }
};
