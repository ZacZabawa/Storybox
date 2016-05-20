@extends('layouts.app')


@section("navbarContent")


 

            <!-- Brand and toggle get grouped for better mobile display -->
            
            <!-- Collect the nav links, forms, and other content for toggling -->
                <li class="active"><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="#start">Record</a></li>
                <li><a href="{{ url('/map') }}">Territory</a></li>
                <li><a href="#statistics">Knowledge Keepers</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Knowledge <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    
                    <li><a href="single-no-sidebar.html">data table</a></li>
                    <li><a href="empty.html">upload</a></li>
                    <li><a href="contact.html">download</a></li>
                    
                  </ul>
                </li>
           
              
                    
         

        
@endsection


@section('content')
<h1> Add knowledge  </h1>
<hr>
{{ Form::open(array('url' => '')) }}
    //
{{ Form::close() }}
@endsection
