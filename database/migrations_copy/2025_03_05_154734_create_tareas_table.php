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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_tarea');
            $table->string('nombre_tarea');
            $table->timestamps();

            $table->foreign('id_tipo_tarea')
                  ->references('id_tipo_tarea') 
                  ->on('tipo_tarea') 
                  ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
        Schema::dropIfExists('tipo_tarea');
    }
};
