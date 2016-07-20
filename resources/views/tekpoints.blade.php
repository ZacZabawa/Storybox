@extends('layouts.app')
 
@section('header')
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oxygen:400,700">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/packages/select2/dist/css/select2.min.css')}}"> 
<style type="text/css">
  #body{
    width: 75%;
    margin: 0 auto;
    padding-top:0px;
  }
</style>
@endsection

@section('footer')
    <script charset="utf-8" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/webapp.js') !!}"></script>
    <script charset="utf-8" src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
     <script charset="utf-8" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="{!! asset('/packages/select2/dist/js/select2.js') !!}"></script>

    <script> $('#select2').select2();</script>
     <script>
       
            $('#tekpointTable').DataTable({
                select: true, });
  
      
    </script>
@endsection


@section('content')   



  <section class="panel">
    <div class="panel-heading">
      <h3>Storybox Knowledge Points</h3>
      
      <button class='btn btn-primary' data-toggle="modal" data-target="#addModal">Add New Point</button>

      <button class='btn btn-secondary' data-toggle="modal" data-target="#addModal">Add New Point Type Modal</button>

      <button class='btn btn-warning'  href="{{ url('/types') }}">Add New Point Type Page</button>
    </div>
<br>
  @if ($tekpoints->count())
              <div class="panel-body">
                 <table id="tekpointTable" class="myTable table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Traditional Place Name</th>
                            <th>Current Name</th>
                            <th>Description</th>
                            <th>Contributor</th>
                            <th>Y</th>
                            <th>X</th>
                            <th>First Hand</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                     </thead>
                        <tbody>
                          @foreach ($tekpoints as $tekpoint)
                              <tr>
                                <td>{{ $tekpoint->tradPlaceName }}</td>
                              
                                <td>{{ $tekpoint->name }}</td>

                                <td>{{ $tekpoint->description }}</td>

                                <td>{{ $tekpoint->contributor_id }}</td>   
                                
                                <td>{{ $tekpoint->y}}</td>
                                <td>{{ $tekpoint->x}}</td>
                                <td>{{ $tekpoint->firstHand}}</td>
                                <td>{{ $tekpoint->created_at}}</td>
                                <td>

                                <div class='row'>
                                   <div class="col-sm-4">

                                  <button class='btn btn-info' href="{{route('tekpoints.edit',$tekpoint->id)}}"  value="{{$tekpoint->id}}"data-toggle="modal" data-target="#editModal">Edit tekpoint</button>
                                    </div>  
                                  <div class="col-sm-4">
                                      {{ Form::open(array('method' => 'DELETE', 'route' => array('tekpoints.destroy', $tekpoint->id))) }}                       
                                      {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                      {{ Form::close() }}
                                  </div>

                                </div>
                              </td>
                             </tr>
                         @endforeach
                        </tbody>
                  </table>

           </div>   
        </section>
  
    
{{-- 
    <div id="addModal" id="attributionModal" tabindex="-1"  class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title">Add tekpoint</h4>
            </div> 
            <div class="modal-body"> 
              @include('partials.addTekpointForm')
            </div>
          </div>
    </div>
  </div> --}}


    <div id="editModal" id="attributionModal" tabindex="-1"  class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title">Edit tekpoint</h4>
            </div> 
            <div class="modal-body"> 
              @include('partials.addTekpointForm')
            </div>
          </div>
    </div>
  </div>

@else
    There are no tekpoints
@endif


@endsection
