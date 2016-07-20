<?php

namespace App\Http\Controllers;
use App\User;
use App\DataTables\UsersDataTable;

use App\community;
use App\Role;
use App\HasRoles;
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
       $roles = Role::lists('label','id');
       return view('users', compact('users','communities','roles'));
       
    } //
 public function anyData()
     {
     // $hasRoles = User::find(1)->()->with('user'); 
     return Datatables::of(User::query())->make(true);
        addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    
    }
    // 
    // 
    // {   require base_path() . '/vendor/server_side/ssp.php';
    //     // DB table to use
    //     $table = 'users';
    //     // Table's primary key
    //     $primaryKey = 'users.id';
    //     $where = '';
    //     $join =' ';
    //     $columns = array(
    //         array('db' => 'users.id as user_id', 'dt' => 0),
    //         array('db' => 'users.name', 'dt' => 1),
    //         array('db' => 'users.email', 'dt' => 2),
    //         array('db' => 'users.created_at', 'dt' => 3),
    //     );}

    
    
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
      //find the role by id
 // dd($request);
$user = User::create($request->all());
// assign the role to a user based on the select box from the form.

// $userid = user::find($request->id);
$user->roles()->attach($request->role_id);
$user->communities()->attach($request->community_id);

// return a view

      // $input = Input::all();
      //   $validation = Validator::make($input, User::$rules);

      //   if ($validation->passes())
      //   {
            // User::create($input);
            // $user->assignRoles('role_id');

            return Redirect::route('users.index');
        }

        // return Redirect::route('users.index')
        //     ->withInput()
        //     ->withErrors($validation)
        //     ->with('message', 'There were validation errors.');
    
  

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
        // if (is_null($user))
        // {
        //     return Redirect::route('users.index');
        // }
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
    $userUpdate = request::all();
        $validation = Validator::make($input, User::$rules);
        if ($validation->passes())
        {
            $user = User::find($id);
            $user->update($userUpdate);
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

