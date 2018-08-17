@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => ['survey.update', $survey->id],
                           'method' => 'PUT',
                           'class'=>'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $survey->name, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Store', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@endsection