<?php

use App\Models\Curso;
use Illuminate\Database\Seeder;

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
