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
        Schema::create('apuestas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apuestas');
    }
};

class CreateApuestasTable extends Migration
{
    public function up()
    {
        Schema::create('apuestas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_juego');
            $table->foreign('id_juego')->references('id')->on('juegos');
            $table->dateTime('fecha');
            $table->integer('monto');
            // Agrega otros campos según tus necesidades
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('apuestas');
    }
}

class CreateJuegosTable extends Migration
{
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->integer('cantidad_jugadores');
            $table->boolean('juego_de_cartas');
            // Otros campos si los necesitas
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('juegos');
    }
}
