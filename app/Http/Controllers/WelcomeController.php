<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HTML;
use App\Http\Requests;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
}
