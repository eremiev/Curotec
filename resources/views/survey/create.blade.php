@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => ['survey.store'],
                           'method' => 'POST',
                           'class'=>'form-horizontal']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Store', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@endsection