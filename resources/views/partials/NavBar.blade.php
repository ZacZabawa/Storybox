
 <nav class="navbar navbar-inverse navbar-fixed-top navbar-transparent" data-offset-top="1" data-offset-bottom="1">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" class="active "id="title" href="{{ url('/') }}">
                    Storybox
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

<li class="active"><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="#start">Record</a></li>
                <li><a href="{{ url('/map') }}">Territory</a></li>

              @can('admin')
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Knowledge <span class="caret"></span></a>
                  <ul class="dropdown-menu">
            
                    <li><a href="{{ url('/users') }}">Users</a></li>
                    <li><a href="{{ url('/tekpoints') }}">Knowledge</a></li>
                    <li><a href="{{ url('/contributors') }}">Contributors</a></li>
                    <li><a href="{{ url('/media') }}">Add Media</a></li>
                    <li><a href="{{ url('/kml') }}">upload</a></li>
                    <li><a href="contact.html">download</a></li>
              
                  </ul>
                
                </li>
           @endcan
 </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/home') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
