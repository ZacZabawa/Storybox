<?php

namespace App\Http\Controllers;
use App\User;
use App\DataTables\UsersDataTable;

use App\community;
use App\Role;
use View;
use Input;
use Validator;
use Redirect;
use Datatables;
use App\http\Requests;
use Illuminate\Http\Request;
class UsersController extends Controller
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

       $users = User::all();
       $communities = community::lists('name');
       $roles = role::lists('label');
       return View::make('users')->with(compact('users','communities', 'roles'));
       
    } //
 public function anyData()
    {
        // DB table to use
        $table = 'users';
        // Table's primary key
        $primaryKey = 'users.id';
        $where = '';
        $join =' ';
        $columns = array(
            array('db' => 'users.id as user_id', 'dt' => 0),
            array('db' => 'users.name', 'dt' => 1),
            array('db' => 'users.email', 'dt' => 2),
            array('db' => 'users.created_at', 'dt' => 3),
        );

    
    }
     public function create()
  {
    return View::make('users.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      
      $input = Input::all();
        $validation = Validator::make($input, User::$rules);

        if ($validation->passes())
        {
            User::create($input);
            $this->roles()->attach($request->input('role_id'));

            return Redirect::route('users.index');
        }

        return Redirect::route('users.index')
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
 $user = User::find($id);
        if (is_null($user))
        {
            return Redirect::route('users.index');
        }
        return View::make('users.edit', compact('user'));
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
        $validation = Validator::make($input, User::$rules);
        if ($validation->passes())
        {
            $user = User::find($id);
            $user->update($input);
            return Redirect::route('users.index');
        }
return Redirect::route('users.edit', $id)
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
        User::find($id)->delete();
        return Redirect::route('users.index');
  }
  
}

