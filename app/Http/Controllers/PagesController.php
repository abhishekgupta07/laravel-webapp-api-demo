<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to API Demo app'; #passing page title as variable
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us'; #passing page title as variable
        return view('pages.about')->with('title', $title);
    }
}
