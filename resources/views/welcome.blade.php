@extends('layouts.app')
  <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

@section("navbarContent")
<ul class="nav navbar-nav navbar-left">
                <li><a href="#overview">Overview</a></li>
                <li><a href="#mainfeatures">Demo</a></li>
                <li><a href="#contact">Contact</a></li>
                  <li><a href="{{ url('/map') }}">Map</a></li>              
              @can('Everything')
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                    
                    <li><a href="{{ url('/users') }}">Users </a></li>
                    <li><a href="{{ url('/knowledge') }}">Knowledge </a></li>
                    <li><a href="{{ url('/contributors') }}">Contributors </a></li>
                    <li><a href="{{ url('/kml') }}">upload</a></li>

               @endcan
              </ul>
             </li> 
@endsection
@section ('footer')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

@endsection

@section('content')


<!--******************************************************
******************** The Hero Wrapper
****************************************************** -->
  
<div class="welcome" background-image:url('{{ asset('images/BCsatBlack.png') }}') >
             
            <div class="container ">
             <ul class= 'banner'  >
                <li id= 'logo'>
                 <!--  <p class="lead">Welcome <br> to</p>
                  <h1>Storybox!</h1>
                  <br/>a place-based knowledge toolkit.</p> -->
                  {{Html::image("/img/logo.png", "Logo",  ['class' => 'img-responsive'])}}
                  
               </li>

                <li id='title'>
                 {{Html::image("/img/title.png", "Title",  ['class' => 'img-responsive'])}}
                 
                </li>
              </div>
          </div>
        </div>


<!--******************************************************
******************** The First Content Wrapper
****************************************************** -->
        <div class="wrapper wrapper-default wrapper-md text-center" id="overview">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center wrapper-xs wrapper-no-padding-top ">
                <i class="fa fa-eye fa-lg colored"></i> 
                <h3>Overview</h3>
                <p class="lead">Storybox is a free and open source tool for communties to map and protect their place-based knowledge. <br>
                Our aim is to empower community researchers by reducing the workflow required in documenting traditional knowlege.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 wrapper-xs wrapper-lightest wow fadeIn " data-wow-delay="0.2s">
                <i class="fa fa-circle-o-notch fa-2x text-muted"></i>
                <h5>Data Collection</h5>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
              </div>

              <div class="col-md-4 wrapper-xs wrapper-lighter wow fadeIn " data-wow-delay="0.6s">
                <i class="fa fa-cogs fa-2x colored-primary"></i>
                <h5>Organization</h5>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>

              <div class="col-md-4 wrapper-xs wrapper-light wow fadeIn " data-wow-delay="1s">
                <i class="fa fa-cubes fa-2x colored"></i>
                <h5>Presentation</h5>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
              </div>
            </div>
          </div>
        </div>


<!--******************************************************
******************** The Contact wrapper
****************************************************** -->
  <div id="contact"></div>
    <div class="wrapper wrapper-darker">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12">
            <i class="fa fa-life-ring colored fa-lg"></i>  
            <h3>Need some help?</h3>
            <p class="lead">Drop us a line and visit us</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
          <!-- The contact form --> 
           @include("partials.contactForm")
            <!-- Contact form end -->
          </div>
        </div>
      </div>
    </div>



<!--******************************************************
******************** The Footer wrapper
****************************************************** -->
  <div id="footer" class="wrapper wrapper-md wrapper-transparent wow fadeIn">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <h6>Service</h6>
          <ul class="nav nav-stacked">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Dolor sitam</a></li>
            <li><a href="#">Sit amet</a></li>
            <li><a href="#">Ut labore</a></li>
            <li><a href="#">Sed diam</a></li>
          </ul>
        </div>

        <div class="col-md-2">
          <h6>About</h6>
          <ul class="nav nav-stacked">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">Dolor sitam</a></li>
            <li><a href="#">Sit amet</a></li>
            <li><a href="#">Ut labore</a></li>
            <li><a href="#">Sed diam</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h6>Latest news</h6>
          <p>Lorem ipsum dolor sit nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua...<br/><a href="single.html">Read on</a></p>

        </div>

        <div class="col-md-4 text-center">
          <i class="fa fa-dribbble fa-2x fa-border-circle text-center"></i> 
          <i class="fa fa-facebook fa-2x fa-border-circle text-center col-md-offset-1"></i> 
          <i class="fa fa-twitter fa-2x fa-border-circle text-center col-md-offset-1"></i> 
          <i class="fa fa-apple fa-2x fa-border-circle text-center col-md-offset-1"></i>                 
        </div>
      </div>
            
      <div class="row wrapper-sm wrapper-no-padding-bottom">

        <div class="col-md-12">
           <hr/>  
          <p><small>© 2016 - Made with <i class="fa fa-heart colored"></i> in Canada | Developed and designed by Zac Zabawa</p>
        </div>
      </div>
    </div>
  </div>


<!-- Init the Owl Carousel slider script - remove this code if it is not in use -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        animateOut: 'fadeOut',
        autoHeight:true,
        items:1,
        loop: true,
        autoplay: true,
        autoplaySpeed: 4000,
        margin:0,
        stagePadding:0,
        smartSpeed:1000
    });
    </script>

    <!-- Init wow.js for animations -->
    <script>
      wow = new WOW({
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       100,          // default
        mobile:       false,       // default
        live:         true        // default
        }
        )
      wow.init();
    </script>

    <!-- Preloader -->
    <script type="text/javascript">
        //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $('#status').fadeOut(); // will first fade out the loading animation
                $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').delay(350).css({'overflow':'visible'});
            })
        //]]>
    </script>


@endsection
