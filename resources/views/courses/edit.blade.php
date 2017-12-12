@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Courses / Edit #{{$course->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('courses.update', $course->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ is_null(old("name")) ? $course->name : old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('department_id')) has-error @endif">
                       <label for="department_id-field">Department_id</label>
                    <input type="text" id="department_id-field" name="department_id" class="form-control" value="{{ is_null(old("department_id")) ? $course->department_id : old("department_id") }}"/>
                       @if($errors->has("department_id"))
                        <span class="help-block">{{ $errors->first("department_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('department_id')) has-error @endif">
                       <label for="department_id-field">Department_id</label>
                    <input type="text" id="department_id-field" name="department_id" class="form-control" value="{{ is_null(old("department_id")) ? $course->department_id : old("department_id") }}"/>
                       @if($errors->has("department_id"))
                        <span class="help-block">{{ $errors->first("department_id") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('courses.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
