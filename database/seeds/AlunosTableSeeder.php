<?php

use App\Models\Aluno;
use Illuminate\Database\Seeder;

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
