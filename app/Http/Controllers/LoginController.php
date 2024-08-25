<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request) {
        $request->validate([
            'name' => ['required', 'alpha', 'min:6'],
            'email' => 'required',
            'passsword' => 'required'
        ],
        [
            'name.required' => 'The user name field is required!',
            'name.alpha' => 'Username should only contain letters!'
        ]); 
        return $request;
    }
}
