<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class normalController extends Controller
{
    public function index() {
        return view('welcome');
    }
}
