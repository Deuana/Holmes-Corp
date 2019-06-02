<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinasTable extends Migration
{
    public function up()
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('codigo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('disciplinas');
    }
}
