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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('id_reserva');
            $table->integer('nºhuespedes');
            $table->unsignedBigInteger('nºhabitacion');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->timestamps();

            $table->foreign('nºhabitacion')
            ->references('id') 
            ->on('habitaciones') 
            ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
