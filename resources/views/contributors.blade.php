@extends('layouts.app')
 
@section('header')
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oxygen:400,700">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('/packages/select2/dist/css/select2.min.css')}}"> 
<style type="text/css">
  .wrapper{
    width: 75%;
    margin: 0 auto;
    padding:20px;
  }
</style>
@endsection

@section('footer')
    <script charset="utf-8" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/webapp.js') !!}"></script>
    <script charset="utf-8" src="//cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{!! asset('/packages/select2/dist/js/select2.js') !!}"></script>
    <script> $('#select2').select2();</script>
    <script>
        $('.contributors').DataTable({
          select: true, });                   
    </script>
@endsection


@section('content')   

@if ($contributors->count())

  <section class="panel">
    <div class="panel-heading">
      <h3>Storybox contributors</h3><button class='btn btn-primary' data-toggle="modal" data-target="#addModal">Add New contributor</button>
    </div>
              <div class="panel-body">
                  <table id="" class="myTable table table-striped table-bordered contributors">
                      <thead>
                          <tr>
                            <th>First Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Consent Form</th>
                            <th>Community</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                      </thead>
                        <tbody>
                          @foreach ($contributors as $contributor)
                              <tr>
                                <td>{{ $contributor->firstName }}</td>
                                <td>{{ $contributor->lastName }}</td>
                              
                                <td>{{ $contributor->email }}</td>                  
                                <td>{{ $contributor->email }}</td>   
                                <td>{{ $contributor->email }}</td>

                                <td><button class='btn btn-info' data-toggle="modal" data-target="#editModal">Edit contributor</button></td>

                                 <td>
                                      {{ Form::open(array('method' => 'DELETE', 'route' => array('contributors.destroy', $contributor->id))) }}                       
                                          {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                      {{ Form::close() }}
                                  </td>
                             </tr>
                         @endforeach
                        </tbody>
                  </table>     
                </div>
              
        </section>

    

    <div id="addModal" id="attributionModal" tabindex="-1"  class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title">Add contributor</h4>
            </div> 
            <div class="modal-body"> 
              @include('partials.addContributorForm')
            </div>
          </div>
    </div>
  </div>


    <div id="editModal" id="attributionModal" tabindex="-1"  class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title">Edit contributor</h4>
            </div> 
            <div class="modal-body"> 
              
            </div>
          </div>
    </div>
  </div>

@else
    There are no contributors
@endif


@endsection


  
















































