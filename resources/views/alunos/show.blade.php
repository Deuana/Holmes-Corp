@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Aluno / Show #{{ $aluno->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('alunos.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('alunos.edit', $aluno->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Nome</label>
<p>
	{{ $aluno->nome }}
</p> <label>Senha</label>
<p>
	{{ $aluno->senha }}
</p> <label>Email</label>
<p>
	{{ $aluno->email }}
</p> <label>Matricula</label>
<p>
	{{ $aluno->matricula }}
</p> <label>Curso_id</label>
<p>
	{{ $aluno->curso_id }}
</p> <label>Curso_id</label>
<p>
	{{ $aluno->curso_id }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
