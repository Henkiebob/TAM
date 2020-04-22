<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class StatusController extends Controller
{
    public function show($name)
    {
        $teacher = Teacher::where('name', $name)->get()->first();
        return view('status')->with('teacher', $teacher);
    }
}
