@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Curso /
                    @if($curso->id)
                        Edit #{{$curso->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($curso->id)
                    <form action="{{ route('cursos.update', $curso->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('cursos.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="name-field">Name</label>
                	<input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $curso->name ) }}" />
                </div> 
                <div class="form-group">
                    <label for="departamento_id-field">Departamento_id</label>
                    <input class="form-control" type="text" name="departamento_id" id="departamento_id-field" value="{{ old('departamento_id', $curso->departamento_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="departamento_id-field">Departamento_id</label>
                    <input class="form-control" type="text" name="departamento_id" id="departamento_id-field" value="{{ old('departamento_id', $curso->departamento_id ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('cursos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection