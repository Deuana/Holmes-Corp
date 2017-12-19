<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
		 \App\Models\Aluno::class => \App\Policies\AlunoPolicy::class,
		 \App\Models\Turma::class => \App\Policies\TurmaPolicy::class,
		 \App\Models\DisciplinaCurso::class => \App\Policies\DisciplinaCursoPolicy::class,
		 \App\Models\Curso::class => \App\Policies\CursoPolicy::class,
		 \App\Models\Departamento::class => \App\Policies\DepartamentoPolicy::class,
		 \App\Models\Professor::class => \App\Policies\ProfessorPolicy::class,
		 \App\Models\Disciplina::class => \App\Policies\DisciplinaPolicy::class,
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
