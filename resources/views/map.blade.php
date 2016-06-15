
@extends('layouts.app')

@section("navbarContent")


 

            <!-- Brand and toggle get grouped for better mobile display -->
            
            <!-- Collect the nav links, forms, and other content for toggling -->
                <li ><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="#start">Record</a></li>
                <li class="active"><a href="{{ url('/map') }}">Territory</a></li>
                

                <li><a href="#" data-toggle="collapse" data-target=".navbar-collapse.in" id="list-btn"><i class="fa fa-list white"></i>&nbsp;&nbsp;POI List</a>
                 
                  @can('Everything')
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Knowledge <span class="caret"></span></a>
                  <ul class="dropdown-menu">
            
                    <li><a href="{{ url('/users') }}">Users</a></li>
                    <li><a href="{{ url('/knowledge') }}">Knowledge</a></li>
                    <li><a href="{{ url('/contributors') }}">Contributors</a></li>
                    <li><a href="{{ url('/media') }}">Media</a></li>
                    <li><a href="{{ url('/upload') }}">Upload</a></li>
                    <li><a href="{{ url('/download') }}">Download</a></li>
                 
                  </ul>
                </li> 
                @endcan
     
           
              
                    
         

        
@endsection

@section('head')
   
     <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}"/>  
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}"/>      
    <link rel="stylesheet" type="text/css" href="{{asset('leaflet/leaflet.css')}}"/>  
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/> 
    <link rel="stylesheet" type="text/css" href="{{asset('leaflet/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.css')}}"/> 

    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.3/leaflet.draw.css' rel='stylesheet' />
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css">
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css">
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon-76.png">
    <link rel="stylesheet" type="text/css" href="{{asset('/packages/dropzone/dist/dropzone.css')}}"/> 
    <link rel="stylesheet" type="text/css" href="{{asset('/packages/select2/dist/css/select2.min.css')}}"/> 
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon-152.png">
    <link rel="icon" sizes="196x196" href="assets/img/favicon-196.png">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
   
    
@stop


@section('footer')
    <script type="text/javascript" src="{!! asset('js/terraformer.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/terraformer-wkt-parser.min.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.5/typeahead.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js"></script>
     <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
    <script type="text/javascript" src="{!! asset('leaflet/Leaflet.draw-master/dist/leaflet.draw.js') !!}"></script>
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js"></script>
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
    <script type="text/javascript" src="{!! asset('leaflet/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/packages/dropzone/dist/dropzone.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/js/dropzoneConfig.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/packages/select2/dist/js/select2.js') !!}"></script>

    <script> $('#tag_list').select2({
      placeholder: 'Contributor'});</script>

@stop


@section('content')
 <head>
   <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}"/>  
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}"/>      
    <link rel="stylesheet" type="text/css" href="{{asset('leaflet/leaflet.css')}}"/>  
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/> 
    <link rel="stylesheet" type="text/css" href="{{asset('leaflet/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.css')}}"/> 

    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.3/leaflet.draw.css' rel='stylesheet' />
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"/> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css">
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css">
    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon-152.png">
    <link rel="icon" sizes="196x196" href="assets/img/favicon-196.png">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    

 </head>


    <div ng-controller="mapController as mapCtrl" position="absolute">
     <leaflet controls="mapCtrl.controls"></leaflet>
    </div>
    <div id="container">
      <div id="sidebar">
        <div class="sidebar-wrapper">
          <div class="panel panel-default" id="features">
            <div class="panel-heading">
              <h3 class="panel-title">Points of Interest
              <button type="button" class="btn btn-xs btn-default pull-right" id="sidebar-hide-btn"><i class="fa fa-chevron-left"></i></button></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-8 col-md-8">
                  <input type="text" class="form-control search" placeholder="Filter" />
                </div>
                <div class="col-xs-4 col-md-4">
                  <button type="button" class="btn btn-primary pull-right sort" data-sort="feature-name" id="sort-btn"><i class="fa fa-sort"></i>&nbsp;&nbsp;Sort</button>
                </div>
              </div>
            </div>
            <div class="sidebar-table">
              <table class="table table-hover" id="feature-list">
                <thead class="hidden">
                  <tr>
                    <th>Icon</th>
                  <tr>
                  <tr>
                    <th>Name</th>
                  <tr>
                  <tr>
                    <th>Chevron</th>
                  <tr>
                </thead>
                <tbody class="list"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



    <!-- Sidebar -->
      <div id="formbar">
        <div class="formbar-wrapper">
          <div class="panel panel-default" id="features">
            <div class="panel-heading">
              <h3 class="panel-title">Add Knowledge Point
              <button type="button" onclick="stopEdits()" class="btn btn-xs btn-default pull-left" id="formbar-hide-btn"><i class="fa fa-chevron-right"></i></button></h3>
            </div>
            <div class="panel-body" id="addFeatures">
              <div class="row">
                <div class="formbar-table" class="col-xs-12">
              

        @include("partials.addTekpointForm")

                  
            </div> 
              </div>
            </div>
            
          </div>
        </div>
      </div>

    







<div id="map"></div>
    </div>
    <div id="loading">
      <div class="loading-indicator">
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-info progress-bar-full"></div>
        </div>
      </div>
    </div>
                    

  
      

    
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal - -->->

    <div class="modal fade" id="legendModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Map Legend</h4>
          </div>
          <div class="modal-body">
            <p>Map Legend goes here...</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">
            <form id="contact-form">
              <fieldset>
                <div class="form-group">
                  <label for="name">Username:</label>
                  <input type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                  <label for="email">Password:</label>
                  <input type="password" class="form-control" id="password">
                </div>
              </fieldset>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Login</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="featureModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-primary" id="feature-title"></h4>
          </div>
          <div class="modal-media"><iframe src="https://player.vimeo.com/video/152108135" style="zoom:0.60" width="99.6%" height="500px" frameborder="0"></iframe></div>
          <div class="modal-body" id="feature-info">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" id="attributionModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">
            </h4>
          </div>
          <div class="modal-body">
            <div id="attribution"></div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    @section('footer')
    
    @endsection
  </body>

</html>
