@extends('layouts.app')

@section('content')
    <h1> Edit student entry </h1>
    
    {!! Form::open(['action' => ['StudentsController@update', $student->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('code', 'Code*')}}
            {{Form::text('code', $student->code, ['class' => 'form-control', 'placeholder' => 'Enter student sode'])}}
        </div>
        <div class="form-group">
            {{Form::label('name', 'Name*')}}
            {{Form::text('name', $student->name, ['class' => 'form-control', 'placeholder' => 'Enter student name'])}}
        </div>  
        <div class="form-group">
            {{Form::label('startTime', 'Start Time*')}}
            {{Form::date('startTime', $student->start_time, ['class' => 'form-control', 'placeholder' => 'Enter start time'])}}
        </div> 
        <div class="form-group">
            {{Form::label('endTime', 'End Time*')}}
            {{Form::date('endTime', $student->end_time, ['class' => 'form-control', 'placeholder' => 'Enter end time'])}}
        </div> 
        {{Form::hidden('_method', 'PUT')}}  {{-- Spoofing a PUT request in POST method ( i.e. adding a hidden input). Permitted by laravel. --}}
        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection('content')
       
