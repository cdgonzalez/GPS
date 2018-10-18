<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsejalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consejal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula',8);
            $table->string('foto',20);
            $table->text('propuestas');
            $table->string('periodo',20);
            $table->boolean('ganador')->default(null);
            $table->boolean('activo');
            $table->unique('matricula');
            $table->foreign('matricula')->references('matricula')->on('alumno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consejal');
    }
}
