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
        Schema::table('habitaciones', function (Blueprint $table) {
            
            $table->unsignedBigInteger('nºhabitacion')->change();

            
            $table->foreign('nºhabitacion')
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
        Schema::table('habitaciones', function (Blueprint $table) {
            
            $table->dropForeign(['nºhabitacion']);
            
        });
    }
   
};
