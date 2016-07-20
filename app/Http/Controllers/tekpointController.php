<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tekpoint;
use App\community;
use App\contributor;
use App\Http\Requests;
use Redirect;

class tekpointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $tekpoints = tekpoint::all();
       $contributors = contributor::lists('firstName');
    
       return view('tekpoints', compact('tekpoints','contributors'));
       
    } //
 public function anyData()
     {
     // $hasRoles = tekpoint::find(1)->()->with('tekpoint'); 
     return Datatables::of(tekpoint::query())->make(true);
        addColumn('action', function ($tekpoint) {
                return '<a href="#edit-'.$tekpoint->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            
            ->make(true);
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('tekpoint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request);
        $tekpoint = tekpoint::create($request->all());
        $tekpoint->contributors()->attach($request->contributor_id);
        
        return view('map');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
