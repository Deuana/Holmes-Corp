@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Turma /
                    @if($turma->id)
                        Edit #{{$turma->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($turma->id)
                    <form action="{{ route('turmas.update', $turma->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('turmas.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="codigo-field">Codigo</label>
                	<input class="form-control" type="text" name="codigo" id="codigo-field" value="{{ old('codigo', $turma->codigo ) }}" />
                </div> 
                <div class="form-group">
                    <label for="disciplina_id-field">Disciplina_id</label>
                    <input class="form-control" type="text" name="disciplina_id" id="disciplina_id-field" value="{{ old('disciplina_id', $turma->disciplina_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="professor_id-field">Professor_id</label>
                    <input class="form-control" type="text" name="professor_id" id="professor_id-field" value="{{ old('professor_id', $turma->professor_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="professor_id-field">Professor_id</label>
                    <input class="form-control" type="text" name="professor_id" id="professor_id-field" value="{{ old('professor_id', $turma->professor_id ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('turmas.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection