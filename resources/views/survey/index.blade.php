@extends('layouts.app')

@section('content')
    <a href="{{ URL::route('survey.create') }}" class="btn btn-success">Create new</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($surveys as $survey)
            <tr>
                <td>{{$survey->name}}</td>
                <td>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ URL::route('survey.edit', $survey->id) }}" class="btn btn-default">Update</a>
                        </div>
                        <div class="col-sm-6">
                            {{ Form::open(['route' => ['survey.destroy', $survey->id], 'method' => 'delete']) }}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {{ Form::close() }}
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection