<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function handleLogin(LoginRequest $request) {

        return $request;
    }
}
