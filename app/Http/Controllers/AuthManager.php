<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login(){
        return view('Login');
    }

    function registration(){
        return view('Registration');
    }

    function loginpost(){
        
    }
}
