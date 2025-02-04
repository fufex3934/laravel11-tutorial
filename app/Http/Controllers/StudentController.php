<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function show()
    {
        return "List of student";
    }
    public function add()
    {
        return "student add";
    }
    public function delete()
    {
        return "student delete";
    }
    public function about($name)
    {
        return $name;
    }
}
