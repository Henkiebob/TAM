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
        $teacher = Teacher::where('name', $name)->get()->first();
        if( $teacher->update($request->all()) ){
            return response(200)
            ->header('Content-Type', 'text/plain');
        }
        else {
            return response('Sorry geart', 500)
            ->header('Content-Type', 'text/plain');
        }
    }
}
