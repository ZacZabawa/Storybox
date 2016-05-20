@extends('layouts.app')
  
    

@section("navbarContent")
               
    @include("partials.NavBar")         

@endsection
           
              
                    
         

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
      <h1>Storybox Contibutors</h1>

      <button type="button" class="button" id="add_user">Add User</button>

      <table class="datatable" id="table_Contibutors">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Consent Form</th>
            <th>Community</th>
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
        
        <h2>Add Contributor</h2>
      @include('partials.addMediaForm')
        
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


  