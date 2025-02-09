<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser()

    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $response->body();
        return view('users', ['data' => json_decode($response)]);
    }
    public function queries()
    {

        return 'This is get method';
    }

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
}
