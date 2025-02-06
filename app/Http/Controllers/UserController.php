<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\get;

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
        // $response = DB::table('users')->get();
        // $response = DB::table('users')->where('password', '1234')->get();
        // $response  = DB::table('users')->where('name','fufa')->update(['password'=>'123']);
        // if($response){
        //     return "User updated successfully";
        // }else{
        //     return "Failed to update user";
        // }
        //  return view('users', ['users' => $response]);
        $response  = DB::table('users')->where('name', 'fufa')->delete();
        if ($response) {
            return "User deleted successfully";
        } else {
            return "Failed to delete user";
        }
    }
}
