<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function addUser(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email',
            'city' => 'required',
            'skill' => 'required|array', // Ensure skill is an array
            'skill.*' => 'in:php,java,python', // Validate each skill value
        ], [
            'username.required' => "username should not be empty"
        ]);

        // If validation passes, handle your logic here, like saving the user

        // For now, redirect back with success message (you can replace this with actual logic)
        return redirect()->back()->with('success', 'User added successfully!');
    }
}
