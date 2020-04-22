<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    
    public function index()
    {
        return Teacher::all();
    }

    public function update(Request $request, $name)
    {
        $name = strtolower($name);
        $teacher = Teacher::where('name', $name)->get()->first();
        if( $teacher->update($request->all()) ){
            return $teacher;
        }
        else {
            return response('Sorry geart', 500)
            ->header('Content-Type', 'text/plain');
        }
    }

    public function show($name)
    {
        $name = strtolower($name);
        $teacher = Teacher::where('name', $name)->get()->first();
        return view('teachers.status')->with('teacher', $teacher);
    }
}
