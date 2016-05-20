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
   <head>
    <meta name="viewport" content="width=1000, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oxygen:400,700">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}"/> 
    
    <script charset="utf-8" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script charset="utf-8" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/webapp.js') !!}"></script>
    <script charset="utf-8" src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
    
   </head>
     <div class="page_container" > 
      <h1>Storybox Users</h1>

      <button type="button" class="button" id="add_user">Add User</button>

      <table class="datatable" id="table_users">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
           
            <th>Created at</th>
            <th>Updated at</th>
            <th>Functions</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>

    </div>

    <div class="lightbox_bg"></div>

    <div class="lightbox_container">
      <div class="lightbox_close"></div>
      <div class="lightbox_content">
        
        <h2>Add user</h2>
        <form class="form add" id="form_user" data-id="" validate>
          <div class="input_container">
            <label for="id">id: <span class="required">*</span></label>
            <div class="field_container">
              <input type="number" step="1" min="0" class="text" name="id" id="id" value="" required>
            </div>
          </div>
          <div class="input_container">
            <label for="name"> name: <span class="required">*</span></label>
            <div class="field_container">
              <input type="text" class="text" name="name" id="name" value="" required>
            </div>
          </div>
          <div class="input_container">
            <label for="email">email: <span class="required">*</span></label>
            <div class="field_container">
              <input type="text" class="text" name="email" id="email" value="" required>
			  <input type = "hidden" type="datetime" name="created_at">           
            </div>
          </div>

          <div class="button_container">
            <button type="submit">Submit</button>
          </div>
        </form>
        
      </div>
    </div>

    <noscript id="noscript_container">
      <div id="noscript" class="error">
        <p>JavaScript support is needed to use this page.</p>
      </div>
    </noscript>

    <div id="message_container">
      <div id="message" class="success">
        <p>This is a success message.</p>
      </div>
    </div>

    <div id="loading_container">
      <div id="loading_container2">
        <div id="loading_container3">
          <div id="loading_container4">
            Loading, please wait...
          </div>
        </div>
      </div>
    </div>

@endsection

