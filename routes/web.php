<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

# Using route to go to a controller and then return a view

# To open about index page through a controller
Route::get('/', 'PagesController@index');

# To open about page through controller
Route::get('/about', 'PagesController@about');

# Create resource route for the students. This will also map route to respective functions
Route::resource('students', 'StudentsController');