@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>DisciplinaCurso / Show #{{ $disciplina_curso->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('disciplina_cursos.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('disciplina_cursos.edit', $disciplina_curso->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Disciplina_id</label>
<p>
	{{ $disciplina_curso->disciplina_id }}
</p> <label>Curso_id</label>
<p>
	{{ $disciplina_curso->curso_id }}
</p> <label>Curso_id</label>
<p>
	{{ $disciplina_curso->curso_id }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
