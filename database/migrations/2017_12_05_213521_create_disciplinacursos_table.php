<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinaCursosTable extends Migration
{
    public function up()
    {
        Schema::create('disciplina_cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disciplina_id')->foreingn();
            $table->integer('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('disciplina_cursos');
    }
}
