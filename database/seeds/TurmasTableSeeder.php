<?php

use Illuminate\Database\Seeder;
use App\Models\Turma;

class TurmasTableSeeder extends Seeder
{
    public function run()
    {
        $turmas = factory(Turma::class)->times(50)->make()->each(function ($turma, $index) {
            if ($index == 0) {
                // $turma->field = 'value';
            }
        });

        Turma::insert($turmas->toArray());
    }

}

