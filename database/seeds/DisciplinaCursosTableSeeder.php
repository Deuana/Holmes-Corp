<?php

use Illuminate\Database\Seeder;
use App\Models\DisciplinaCurso;

class DisciplinaCursosTableSeeder extends Seeder
{
    public function run()
    {
        $disciplina_cursos = factory(DisciplinaCurso::class)->times(50)->make()->each(function ($disciplina_curso, $index) {
            if ($index == 0) {
                // $disciplina_curso->field = 'value';
            }
        });

        DisciplinaCurso::insert($disciplina_cursos->toArray());
    }

}

