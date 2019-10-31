<?php

use Illuminate\Http\Request;
use App\Student; # Model

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

# Not implemented
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//  Define API routes for CRUD operations
Route::get('students', 'APIController@index');
Route::get('students/{id}', 'APIController@show');
Route::get('students/search/{code}/{name}', 'APIController@search');
Route::delete('students/{id}', 'APIController@destroy');
Route::post('students', 'APIController@store');
Route::put('students/{id}', 'APIController@update');




// Moved below code to API Controller

// Route::get('students', function() {
//     // If the Content-Type and Accept headers are set to 'application/json', 
//     // this will return a JSON structure. This will be cleaned up later.
    
//     $students = Student::all(); 
//     return response()->json($students, 200);
// });
 
// Route::get('students/{id}', function($id) {
//     $student = Student::find($id);
//     return response()->json($student, 200);
// });

// Route::post('students', function(Request $request) {
//     return Student::create($request->all);
// });

// Route::put('students/{id}', function(Request $request, $id) {
//     $student = Student::findOrFail($id);
//     $student->update($request->all());

//     return response()->json($student, 200);
// });

// Route::delete('students/{id}', function($id) {
//     Student::find($id)->delete();

//     return response()->json(null, 204);
// });


