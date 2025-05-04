<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // This method handles login form submission
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        // Perform your login logic here (check credentials, etc.)  
    }

    // This method handles register form submission
    public function register(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        // Perform your register logic here (save to database, etc.)
    }
}
