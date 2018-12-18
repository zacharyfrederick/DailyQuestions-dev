@extends('layout')

@section('content')
    @include('inc.messages')
    <h3>Create a new DailyQuestion</h3>
    {{ Form::open(['action' => 'QuestionController@store', 'method'=>'post']) }}
        <div class='form-group'>
            {{Form::label('question', 'Question')}}
            {{Form::text('question', '',['class' => 'form-control', 'placeholder' => 'Enter your question'])}}
        </div>
        {{Form::submit('Create', ['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection