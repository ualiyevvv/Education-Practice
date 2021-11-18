<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function price ()
    {
        return view('price');
    }
    public function contacts ()
    {
        return view('contacts');
    }
}
