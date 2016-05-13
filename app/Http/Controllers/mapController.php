<?php

namespace App\Http\Controllers;
use App\Contributor;
use App\media;
use App\community;
use Illuminate\Http\Request;

use App\Http\Requests;

class mapController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributors = contributor::lists('firstName');
        
        $communities = community::lists('name');
               

        return view('map', compact('communities','contributors', 'tekpoints'));
    } //

   
}
