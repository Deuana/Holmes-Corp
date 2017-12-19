@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Turma / Show #{{ $turma->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('turmas.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('turmas.edit', $turma->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Codigo</label>
<p>
	{{ $turma->codigo }}
</p> <label>Disciplina_id</label>
<p>
	{{ $turma->disciplina_id }}
</p> <label>Professor_id</label>
<p>
	{{ $turma->professor_id }}
</p> <label>Professor_id</label>
<p>
	{{ $turma->professor_id }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
