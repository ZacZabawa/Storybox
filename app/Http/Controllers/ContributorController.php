<?php

namespace App\Http\Controllers;
use App\Contributor;
use App\media;
use App\tekpoint;
use Request;
use App\community;
use Html;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class ContributorController extends Controller
{
     /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$contributors = contributor::lists('firstName');
		$tekpoints = tekpoint::lists('ident');
		$communities = community::lists('name');
 				
 		return view('contributors', compact('communities','contributors', 'tekpoints' ));
	}

	public function store(Request $request)
{
    $this->validate($request, [
        'title' => 'required',
        'description' => 'required'
    ]);

    $input = $request->all();

    Task::create($input);

    Session::flash('flash_message', 'Task successfully added!');

    return redirect()->back();
}

}