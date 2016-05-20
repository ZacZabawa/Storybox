@extends('layouts.app')
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}"/>  
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}"/>      

@section("navbarContent")

  <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="#start">Start</a></li>
                <li><a href="#overview">Overview</a></li>
                <li><a href="#mainfeatures">Features</a></li>
                <li><a href="#statistics">Statistics</a></li>
                <li><a href="#basics">Basics</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li ><a href="map">Map</a></li>
                    <li><a href="single-no-sidebar.html">No Sidebar</a></li>
                    <li><a href="empty.html">Empty Page Template</a></li>
                    <li><a href="contact.html">Contact Page</a></li>
                    <li><a href="404.html">404 Page</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="auth/login" target="_blank" class="btn btn-md btn-success-outline navbar-btn pull-right">Login</a></li>
                     
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}" target="_blank" class="btn btn-md btn-success-outline navbar-btn pull-right"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
             \

            </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
@endsection


@section('content')


<!--******************************************************
******************** The Hero Wrapper
****************************************************** -->

    <div class="wrapper wrapper-lg wrapper-darker fx-bg-fixed fx-bw"  style="background-image: url(img/BCsat.png);  background-size:cover; background-position: bottom center;  ">
      <div class="overlay overlay-darker"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 push-navbar-height-top ">
            <h2 class="headline">STORYBOX</h2>
            <h3>A place-based knowledge toolkit</h3>
            <hr>
            <div Class>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection



