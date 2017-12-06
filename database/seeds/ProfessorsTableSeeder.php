<?php

use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessorsTableSeeder extends Seeder
{
    public function run()
    {
        $professors = factory(Professor::class)->times(50)->make()->each(function ($professor, $index) {
            if ($index == 0) {
                // $professor->field = 'value';
            }
        });

        Professor::insert($professors->toArray());
    }

}

