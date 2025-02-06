<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    public function getUser()
    
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response= $response->body();
        return view('users',['data' => json_decode($response)]);
    }
}
