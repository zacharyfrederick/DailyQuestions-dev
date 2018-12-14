@extends('layouts/app')

@section('content')
<div class='container'>
    {!! Form::open(['action' => 'QuestionController@store', 'method' => 'post']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Question')}}
            {{Form::text('question', '', ['class' => 'form-control', 'placeholder'=> 'Enter your daily question'])}}
            {{Form::checkbox('Binary', 'value') }}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
@endsection