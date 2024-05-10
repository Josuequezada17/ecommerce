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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained(); //auto, camioneta, suv, deportivo
            $table->string('modelo'); //crv, rav4, xtrail, escape, prius
            $table->foreignId('marca_id')->constrained(); //honda, toyota, nissan, ford, chevrolet
            $table->string('anio'); //2020, 2021, 2022, 2023, 2024
            $table->string('version'); //lx, le, advance, se, premier
            $table->string('color');//rojo, azul,negro, blanco, gris
            $table->string('cilindros'); //4, 6, 8
            $table->text('descripcion');
            $table->decimal('precio', 15, 2);
            $table->softDeletes(); 
            
            $table->timestamps();
        });
    }
    //Agregar relaciones en los modelos y las vistas

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
