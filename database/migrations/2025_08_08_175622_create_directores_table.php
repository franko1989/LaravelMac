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
        Schema::create('directores', function (Blueprint $table) {
            $table->id();
            $table->String('nombre', 100);
            $table->timestamps();
        });

        //columna pivote
        Schema::create('pelicula_director', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pelicula_id');
            $table->foreign('pelicula_id')
                ->references('id')
                ->on('peliculas')
                ->onDelete('cascade');

            $table->unsignedBigInteger('director_id');
            $table->foreign('director_id')
                ->references('id')
                ->on('directores')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelicula_director');
        Schema::dropIfExists('directores');
        
    }
};
