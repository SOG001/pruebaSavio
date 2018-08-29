<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            //creacion de los ataributos de la tabla Profesor
            $table->increments('id');
            $table->string('nombre'); //nombre del profesor a crear
            $table->string('qpellido'); //apellido del profesor
            $table->string('identificacion')->unique(); // identificación del profesor
            $table->string('edad'); //edad del profesor
            $table->string('titulo'); //se refiere al titulo universitario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesors');
    }
}
