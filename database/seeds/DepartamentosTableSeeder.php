<?php

use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{
    public function run()
    {
        $departamentos = factory(Departamento::class)->times(50)->make()->each(function ($departamento, $index) {
            if ($index == 0) {
                // $departamento->field = 'value';
            }
        });

        Departamento::insert($departamentos->toArray());
    }
}
