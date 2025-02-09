<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    

    function login(Request $request)
    {
        $request->session()->put('user', $request->input('user'));
        return redirect('profile');
    }
    function logout()
    {
        session()->pull('user');
        return redirect('profile');
    }
    public function addUser(Request $request)
{
    
    // Redirect with a success message
    return redirect('users')->with('message', 'User has been added successfully');
}

}
