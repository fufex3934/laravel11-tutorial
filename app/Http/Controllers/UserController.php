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
            'city' => 'required'
        ]);
    
        // If validation passes, handle your logic here, like saving the user
    
        // For now, redirect back with success message (you can replace this with actual logic)
        return redirect()->back()->with('success', 'User added successfully!');
    }
    
}
