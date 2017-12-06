<?php

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursosTableSeeder extends Seeder
{
    public function run()
    {
        $cursos = factory(Curso::class)->times(50)->make()->each(function ($curso, $index) {
            if ($index == 0) {
                // $curso->field = 'value';
            }
        });

        Curso::insert($cursos->toArray());
    }

}

