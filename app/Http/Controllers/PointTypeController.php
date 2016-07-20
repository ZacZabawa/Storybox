<?php

namespace App\Http\Controllers;
use App\pointType;
use Illuminate\Http\Request;

use App\Http\Requests;

class PointTypeController extends Controller
{
    public function index()
    {
    	$pointTypes = pointType::all();
    	return view ('pointType', compact('pointTypes'));

    }

    public function anydata()
    {
    	return Datatables::of(pointType::query())->make(true);
        addColumn('action', function ($pointType) {
                return '<a href="#edit-'.$pointType->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            
            ->make(true);


    }

     public function store(Request $request)
    {
         // dd($request);
        $pointType = pointType::create($request->all());

        return view('pointType');
    }


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
