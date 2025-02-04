<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        return 'Show students';
    }
    public function add(){
        return 'add students';
    }
}
