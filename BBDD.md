# crear clave foranea

````php artisan make:migration add_foreign_key_to_habitaciones  
//modificar tablas.
    
 // Asegurar que la columna tipo_habitacion sea del tipo correcto
            $table->unsignedBigInteger('tipo_habitacion')->change();

            
            $table->foreign('tipo_habitacion')
                  ->references('id') //Id de otra tabla
                  ->on('tipos_habitaciones') //tabla con la que se relaciona.
                  ->onDelete('cascade'); 



                        



            php artisan make:migration add_foreign_key_to_habitaciones



````