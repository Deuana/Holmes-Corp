<?php

use App\Models\Disciplina;
use Illuminate\Database\Seeder;

class DisciplinasTableSeeder extends Seeder
{
    public function run()
    {
        $disciplinas = factory(Disciplina::class)->times(50)->make()->each(function ($disciplina, $index) {
            if ($index == 0) {
                // $disciplina->field = 'value';
            }
        });

        Disciplina::insert($disciplinas->toArray());
    }
}
