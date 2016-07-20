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

 //    public function store(Request $request)

 //    {
 //        $input = Input::all();
 //        $validation = Validator::make($input, User::$rules);
 //        return Redirect::route('welcome.thanks');
 //    }

 //    public function thanks()
 //    {
 //        return view('thanks');
 //    }
 }
