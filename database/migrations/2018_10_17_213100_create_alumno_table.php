<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->string('matricula',8);
            $table->string('nombre',50);
            $table->string('carrera',5);
            $table->text('PIN');
            $table->smallInteger('PS');
            $table->text('PR');
            $table->boolean('voto');
            $table->boolean('Admin');
            $table->primary('matricula');
           // $table->foreign('PS')->references('id')->on('PS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
