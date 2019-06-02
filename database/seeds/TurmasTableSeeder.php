<?php

use App\Models\Turma;
use Illuminate\Database\Seeder;

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
