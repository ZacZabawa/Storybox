<?php

namespace App\Http\Controllers;
use App\contributor;
use App\DataTables\contributorsDataTable;
use App\Http\Requests;
use App\community;
use View;
use Input;
use Validator;
use Redirect;
use Datatables;
use App\media;
use App\tekpoint;
use Illuminate\Http\Request;
use Html;

class ContributorController extends Controller
{
     /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		
		$contributors = contributor::all();
		$tekpoints = tekpoint::lists('name');
		$communities = community::lists('name');
 				
 		return view('contributors', compact('communities','contributors', 'tekpoints' ));
	}
	 public function anyData()
    {
        return Datatables::of(Contributor::query())->make(true);
        addColumn('action', function ($contributor) {
                return '<a href="#edit-'.$contributor->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    
    }

      public function create()
  {
    return View::make('contributors.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
  	 dd($request->input('community_id'));
     $contributor = contributors()->create($request->all());
   
   	 $contributor->communities()->attach($request->input('communities'));

   dd($request->input('$input'));
    $this->validate($request, [
    'firstName' => 'bail|required|max:15',
    'lastName' => 'bail|required|max:15',
    'phone' => 'numeric|max:15',
    'community' => 'required',
]);

        if ($validation->passes())
        {
           

            Contributor::create($input);

            return Redirect::route('contributors.index');
        }

        return Redirect::route('contributors.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }
  

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
 $contributor = Contributor::find($id);
        if (is_null($contributor))
        {
            return Redirect::route('contributors.index');
        }
        return View::make('contributors.edit', compact('contributor'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    $input = Input::all();
        $validation = Validator::make($input, Contributor::$rules);
        if ($validation->passes())
        {
            $user = Contributor::find($id);
            $user->update($input);
            return Redirect::route('contributors.index');
        }
return Redirect::route('contributors.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
        Contributor::find($id)->delete();
        return Redirect::route('contributors.index');
  }
  

}