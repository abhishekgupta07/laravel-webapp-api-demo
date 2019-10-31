@extends('layouts.app')

@section('content')
    <h1> Create a new student entry </h1>
    
    {!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('code', 'Code*')}}
            {{Form::text('code', '', ['class' => 'form-control', 'placeholder' => 'Enter student sode'])}}
        </div>
        <div class="form-group">
            {{Form::label('name', 'Name*')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter student name'])}}
        </div>  
        <div class="form-group">
            {{Form::label('startTime', 'Start Time*')}}
            {{Form::date('startTime', '', ['class' => 'form-control', 'placeholder' => 'Enter start time'])}}
        </div> 
        <div class="form-group">
            {{Form::label('endTime', 'End Time*')}}
            {{Form::date('endTime', '', ['class' => 'form-control', 'placeholder' => 'Enter end time'])}}
        </div> 
        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection('content')
       
