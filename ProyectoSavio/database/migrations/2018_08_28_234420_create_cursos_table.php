<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            //creacion de los ataributos de la tabla curso
            $table->increments('id');//codigo curso a crear
            $table->string('nombre'); //nombre del curso
            $table->unsignedInteger('id_profesor');
            $table->foreign('id_profesor')->refereces('id')->on('profesors'); // id profesor asignado al curso
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
        Schema::dropIfExists('cursos');
    }
}
