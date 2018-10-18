<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votar', function (Blueprint $table) {
            $table->dateTime('votaciones');
            $table->string('matricula',8);
            $table->unique('matricula');
            $table->foreign('matricula')->references('matricula')->on('consejal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votar');
    }
}
