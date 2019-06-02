<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('senha');
            $table->string('email');
            $table->string('matricula');
            $table->integer('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('alunos');
    }
}
