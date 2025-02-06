<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function getStudent()
    {
        $students =Student::all();
        return view('students',['students' => $students]);
    }
    
}
