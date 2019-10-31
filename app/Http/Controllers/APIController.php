<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; # Model
use DB;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $students = Student::orderBy('code', 'asc')->paginate(5); // Pagination with 1 for demonstration

        // $students = Student::orderBy('code', 'asc')->take(1)->get(); // Fetching only 1 student
        
        // 3 ways of fetching data from DB
        // $students = Student::orderBy('code', 'asc')->get(); // Fetching student list using Eloquent
        // $students = DB::select('SELECT * FROM students'); // Fetching student list using DB
        $students = Student::all(); 

        
        return response()->json($students, 200);
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

        // Create a new student entry
        $student = new Student;
        $student->code = $request->input('code');
        $student->name = $request->input('name');
        $student->start_time = $request->input('startTime');
        $student->end_time = $request->input('endTime');
        
            
        try {
            $student->save();
            return response()->json($student, 201);
        } catch (\Exception $e) {
            $message = 'Not all fields supplied for creating a new student entry. Try again.';
            return response()->json($message, 400);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {            
        # Find the student from id
        $student = Student::find($id);

        # To support partial search using id
        // $student = DB::table('students')
        //         ->select('*')   
        //         ->where('id', 'like', '%' . $id . '%')
        //         ->get();


        if ($student) {
            return response()->json($student, 200);
        } else {
            $message = 'Student record not found. Try again.';
            return response()->json($message, 400);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search($code, $name)
    {

        # To support partial search using id
        $student = DB::table('students')
                ->select('*')   
                ->where('code', 'like', '%' . $code . '%')
                ->where('name', 'like', '%' . $name . '%')
                ->get();


        if ($student) {
            return response()->json($student, 200);
        } else {
            $message = 'Student record not found. Try again.';
            return response()->json($message, 400);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        // Update the student entry
        $student = Student::find($id);           

        if ($student) {
            $student->code = $request->input('code');
            $student->name = $request->input('name');
            $student->start_time = $request->input('startTime');
            $student->end_time = $request->input('endTime');
            $student->save();

            return response()->json($student, 200);
        } else {
            $message = 'Student record not found. Try again.';
            return response()->json($message, 400);
        }
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

        if ($student) {
            $student->delete();
            $message = 'Student record with id '.$id. ' deleted.';
            return response()->json($message, 200);
        } else {
            // No content handling ?
            $message = 'Student record not found. Try again.';
            return response()->json($message, 400);
        }
    }
}
