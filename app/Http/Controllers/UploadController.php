<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function upload(Request $request)
    {
        $file = $request->file('file');
        $path = $file->store('uploads', 'public');
        return view('display', ['path' => $path]);
    }
}
