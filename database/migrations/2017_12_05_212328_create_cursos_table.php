<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('departamento_id');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('cursos');
    }
}
