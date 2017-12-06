@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> DisciplinaCurso /
                    @if($disciplina_curso->id)
                        Edit #{{$disciplina_curso->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($disciplina_curso->id)
                    <form action="{{ route('disciplina_cursos.update', $disciplina_curso->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('disciplina_cursos.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="disciplina_id-field">Disciplina_id</label>
                    <input class="form-control" type="text" name="disciplina_id" id="disciplina_id-field" value="{{ old('disciplina_id', $disciplina_curso->disciplina_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="curso_id-field">Curso_id</label>
                    <input class="form-control" type="text" name="curso_id" id="curso_id-field" value="{{ old('curso_id', $disciplina_curso->curso_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="curso_id-field">Curso_id</label>
                    <input class="form-control" type="text" name="curso_id" id="curso_id-field" value="{{ old('curso_id', $disciplina_curso->curso_id ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('disciplina_cursos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection