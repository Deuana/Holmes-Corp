<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
        Schema::defaultStringLength(191);
		//\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Aluno::observe(\App\Observers\AlunoObserver::class);
		\App\Models\Turma::observe(\App\Observers\TurmaObserver::class);
		\App\Models\DisciplinaCurso::observe(\App\Observers\DisciplinaCursoObserver::class);
		\App\Models\Curso::observe(\App\Observers\CursoObserver::class);
		\App\Models\Departamento::observe(\App\Observers\DepartamentoObserver::class);
		\App\Models\Professor::observe(\App\Observers\ProfessorObserver::class);
		\App\Models\Disciplina::observe(\App\Observers\DisciplinaObserver::class);

        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (app()->environment() == 'local' || app()->environment() == 'testing') {

            $this->app->register(\Summerblue\Generator\GeneratorsServiceProvider::class);

        }
    }
}
