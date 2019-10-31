@extends('layouts.app')

@section('content')
    
    <a href="/students" class = "btn btn-light">Go back</a>
    <br></br>
    <h1> Student, {{$student->name}} </h1>
    <hr>
    <small> Created on {{$student->created_at}}</small>
    <hr>
    <a href="/students/{{$student->id}}/edit" class = "btn btn-light">Edit</a>

    {!!Form::open(['action' => ['StudentsController@destroy', $student->id], 'method'=> 'DELETE', 'class'=>'float-right'])!!}
        {{-- {{Form::hidden('_method', 'DELETE')}} --}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close() !!}

@endsection('content')
       