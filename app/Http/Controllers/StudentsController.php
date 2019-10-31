<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; # Model
use DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $students = Student::orderBy('code', 'asc')->paginate(5); // Pagination with 1 for demonstration

        // $students = Student::orderBy('code', 'asc')->take(1)->get(); // Fetching only 1 student
        
        // 3 ways of fetching data from DB
        // $students = Student::orderBy('code', 'asc')->get(); // Fetching student list using Eloquent
        // $students = DB::select('SELECT * FROM students'); // Fetching student list using DB
        // $students = Student::all(); 

        
        return view('students.index')->with('students', $students);
        // return $students;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [

            'code' => 'required',
            'name' => 'required',
            'startTime' => 'required',
            'endTime' => 'required'

        ]);

        // Create a new student entry
        $student = new Student;
        $student->code = $request->input('code');
        $student->name = $request->input('name');
        $student->start_time = $request->input('startTime');
        $student->end_time = $request->input('endTime');
        $student->save();

        return redirect('/students')->with('success', 'New student entry created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $student = Student::find($id);
        return view('students.show')->with('student', $student);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [

            'code' => 'required',
            'name' => 'required',
            'startTime' => 'required',
            'endTime' => 'required'

        ]);

        // Update the student entry
        $student = Student::find($id);
        $student->code = $request->input('code');
        $student->name = $request->input('name');
        $student->start_time = $request->input('startTime');
        $student->end_time = $request->input('endTime');
        $student->save();

        return redirect('/students')->with('success', 'Student details updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student entry deleted successfully.');
        // return response()->json(null, 204);
    }
}
