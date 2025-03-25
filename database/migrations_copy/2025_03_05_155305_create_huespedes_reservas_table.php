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
        Schema::create('huespedes_reservas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_reserva');
            $table->unsignedBigInteger('id_huesped');
            $table->timestamps();

            $table->foreign('id_reserva')
            ->references('id_reserva') 
            ->on('reservas') 
            ->onDelete('cascade'); 

            $table->foreign('id_huesped')
            ->references('id_huesped') 
            ->on('huespedes') 
            ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huespedes_reservas');
    }
};
