@extends('layouts.app')
  
    

@section("navbarContent")


 

            <!-- Brand and toggle get grouped for better mobile display -->
            
            <!-- Collect the nav links, forms, and other content for toggling -->
                <li ><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="#start">Record</a></li>
                <li ><a href="{{ url('/map') }}">Territory</a></li>
                  @can('view_tables')
                <li class="dropdown">
                  <a href="#" class="active" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Knowledge <span class="caret"></span></a>
                  <ul class="dropdown-menu">
            
                    <li><a href="{{ url('/users') }}">Users table</a></li>
                    <li><a href="{{ url('/knowledge') }}">Knowledge table</a></li>
                    <li><a href="{{ url('/contributors') }}">Contributors table</a></li>
                  
                    <li><a href="empty.html">upload</a></li>
                    <li><a href="contact.html">download</a></li>
                   @endcan 
                  </ul>
        
                </li>
@stop
           
              
            

@section('content')

<div class="col-lg-10 col-lg-offset-1">

    <h1><i class="fa fa-users"></i> User Administration </h1>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                   
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>
                        <a href="/user/{{ $user->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {{ Form::open(['url' => '/user1/' . $user->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="/user1/create" class="btn btn-success">Add User</a>

</div>

@stop