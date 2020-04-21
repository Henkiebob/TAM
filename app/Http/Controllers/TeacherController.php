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
        $teacher->update($request->all());
    }
}
