<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function login() {
        return view('Authenticate.login');
    }
    public function register(){
        return view('Authenticate.register');
    }
}
