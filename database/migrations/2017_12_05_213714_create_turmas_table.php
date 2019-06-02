<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->integer('disciplina_id')->foreingn();
            $table->integer('professor_id');
            $table->foreign('professor_id')->references('id')->on('professors');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('turmas');
    }
}
