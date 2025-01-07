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
        Schema::create('Alumno', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamps();  // Es recomendable incluir esta línea para crear los campos created_at y updated_at
        });
        
        Schema::create('Asignatura', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();  // Igualmente, es útil incluir los timestamps en esta tabla
        });
        
        Schema::create('Nota', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('alumno_id');  // Se debe usar un tipo adecuado para las claves foráneas
            $table->unsignedBigInteger('asignatura_id');  // Debes usar un tipo de datos coherente con el id de la tabla Asignatura
            $table->integer('nota');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        
            // Definir las claves foráneas
            $table->foreign('alumno_id')->references('id')->on('Alumno')->onDelete('cascade');
            $table->foreign('asignatura_id')->references('id')->on('Asignatura')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Nota');
        Schema::dropIfExists('Asignatura');
        Schema::dropIfExists('Alumno');
    }
};
