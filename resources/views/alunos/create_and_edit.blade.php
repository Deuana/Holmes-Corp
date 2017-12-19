@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Aluno /
                    @if($aluno->id)
                        Edit #{{$aluno->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($aluno->id)
                    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('alunos.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="nome-field">Nome</label>
                	<input class="form-control" type="text" name="nome" id="nome-field" value="{{ old('nome', $aluno->nome ) }}" />
                </div> 
                <div class="form-group">
                	<label for="senha-field">Senha</label>
                	<input class="form-control" type="text" name="senha" id="senha-field" value="{{ old('senha', $aluno->senha ) }}" />
                </div> 
                <div class="form-group">
                	<label for="email-field">Email</label>
                	<input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $aluno->email ) }}" />
                </div> 
                <div class="form-group">
                    <label for="matricula-field">Matricula</label>
                    <input class="form-control" type="text" name="matricula" id="matricula-field" value="{{ old('matricula', $aluno->matricula ) }}" />
                </div> 
                <div class="form-group">
                    <label for="curso_id-field">Curso_id</label>
                    <input class="form-control" type="text" name="curso_id" id="curso_id-field" value="{{ old('curso_id', $aluno->curso_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="curso_id-field">Curso_id</label>
                    <input class="form-control" type="text" name="curso_id" id="curso_id-field" value="{{ old('curso_id', $aluno->curso_id ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('alunos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection