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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('capacidad');
            $table->unsignedBigInteger('id_tipo_habitacion');
            $table->timestamps();
            $table->foreign('id_tipo_habitacion')
                  ->references('id') 
                  ->on('tipo_habitacion') 
                  ->onDelete('cascade'); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
