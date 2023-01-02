<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class normalcontroller extends Controller
{
    public function index() {
        return view('welcome');
    }
}
