<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('Auth.login');
    }

    public function ShowRegister(){
        return view('register');
    }
}
