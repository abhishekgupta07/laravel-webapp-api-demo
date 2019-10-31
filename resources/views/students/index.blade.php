@extends('layouts.app')

@section('content')

    <h1> Students </h1>
    <br>
    {{-- Loop through the students list --}}
    @if (count($students) > 0)
        
        {{-- create a table of students --}}
        <table class="table">
            
            {{-- student table headers --}}
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                </tr>
            </thead>
                
            <tbody>
                
                {{-- loop through each student and add as a row --}}
                @foreach ($students as $student)
                                        
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td><a href= "/students/{{$student->id}}"> {{$student->code}}</a></td> {{-- create a hyperlink to open an individual student page --}}
                        <td>{{$student->name}}</td>
                        <td>{{$student->start_time}}</td>
                        <td>{{$student->end_time}}</td>
                    </tr>
                              
                @endforeach
            </tbody>

        </table>
        
   @else
            
        <p> No students in the list. Visit later. </p>
    
   @endif
   {{-- For pagination --}}
   {{$students->links()}} 

@endsection

