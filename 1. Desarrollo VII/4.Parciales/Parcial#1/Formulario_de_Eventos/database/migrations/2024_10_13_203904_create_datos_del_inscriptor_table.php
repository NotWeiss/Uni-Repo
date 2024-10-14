<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('datos_de_inscriptor', function (Blueprint $table) {
            $table->increments('inscriptor_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->unsignedInteger('edad');
            $table->char('sexo');
            $table->unsignedInteger('residencia');
            $table->foreign('residencia')->references('pais_id')->on('datos_de_pais');
            $table->unsignedInteger('nacionalidad');
            $table->foreign('nacionalidad')->references('pais_id')->on('datos_de_pais');
            $table->string('telefono');
            $table->string('correo');
            $table->unsignedInteger('tema');
            $table->foreign('tema')->references('area_id')->on('datos_de_area_de_interes');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_del_inscriptor');
    }
};
