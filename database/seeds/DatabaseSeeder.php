<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AlunosTableSeeder::class);
        $this->call(TurmasTableSeeder::class);
        $this->call(DisciplinaCursosTableSeeder::class);
        $this->call(CursosTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(ProfessorsTableSeeder::class);
        $this->call(DisciplinasTableSeeder::class);
    }
}
