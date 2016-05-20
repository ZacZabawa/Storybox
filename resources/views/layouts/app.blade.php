<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--[if lte IE 10]>
    <script type="text/javascript">document.location.href ='/unsupported-browser'</script>
    <![endif]-->

    <title>Storybox</title>

    
    <!-- Fonts -->
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}"/> 
    <!-- Styles -->
     
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}"/>  
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}"/>  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/> 
    @yield('head')
    
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body>

@include('partials.NavBar')
                  

               
 

    @yield('content')

    
    
    <!-- JavaScripts -->
     <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
    <script src="js/wow.min.js" type="text/javascript"></script> <!-- The script for particle effects - remove if you don´t use it -->
    @yield('footer')
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
