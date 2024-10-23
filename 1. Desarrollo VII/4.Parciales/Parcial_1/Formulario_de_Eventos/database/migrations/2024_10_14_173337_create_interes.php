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
        //
        Schema::disableForeignKeyConstraints();

        Schema::create('interes', function (Blueprint $table) {
            $table->unsignedInteger('area_id');
            $table->foreign('area_id')->references('area_id')->on('datos_de_area')->onDelete('cascade');
            $table->unsignedInteger('inscriptor_id');
            $table->foreign('inscriptor_id')->references('inscriptor_id')->on('datos_de_inscriptor')->onDelete('cascade');


            $table->primary(['inscriptor_id', 'area_id']);
        });

        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('interes');
    }
};
