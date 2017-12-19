<?php

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunosTableSeeder extends Seeder
{
    public function run()
    {
        $alunos = factory(Aluno::class)->times(50)->make()->each(function ($aluno, $index) {
            if ($index == 0) {
                // $aluno->field = 'value';
            }
        });

        Aluno::insert($alunos->toArray());
    }

}

