@extends('layouts.app')


  <head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link data-require="bootstrap-css@3.2.0" data-semver="3.2.0" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
   
    <script data-require="angular.js@1.2.21" data-semver="1.2.21" src="https://code.angularjs.org/1.2.21/angular.js"></script>
    <link rel="stylesheet" href="table/style.css" />
     <script type="text/javascript" src="table/js/script.js"></script> 
     <script type="text/javascript" src="table/js/smart-table.debug.js"></script> 
     <script type="text/javascript" src='table/js/InfiniteScrollPlugin.js'></script>
     <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
  
  </head>

@section("navbarContent")
               
    @include("partials.NavBar")         

@endsection
           
              
                    
         

@section('content')
{!! $dataTable->table() !!}
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts() !!}
@stop



<!-- @section('content')
    <style type="text/css">
    	.wrapper{
    		width: 75%;
    		margin: 0 auto;
    	}
    </style>	
    <div class="wrapper">
    <section class="panel panel-primary">
    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
    	
    

    </table>
    </section>
    </div>





@stop

@push('scripts')
<script>
$(function() {
      $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'http://datatables.yajrabox.com/fluent/basic-data'
    });
});
</script>



@endpush
 -->
