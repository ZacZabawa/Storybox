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
    <script> $('select2').select2();</script>
    <script>
        $('.users').DataTable({
          select: true, });                   
    </script>
@endsection


@section('content')   

@if ($media->count())
<div class="wrapper">
  <section class="panel">
    <div class="panel-heading">
      <h3>Media Objects</h3><button type='btn btn-primary' data-toggle="modal" data-target="#addModal">Add Media</button>
    </div>
              <div class="panel-body">
                  <table id="" class="myTable table table-striped table-bordered users">
                      <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Community</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                      </thead>
                        <tbody>
                          @foreach ($users as $user)
                              <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>                  
                                <td>{{ $user->email }}</td>   
                                <td>{{ $user->email }}</td>

                                <td><button type='btn btn-info' data-toggle="modal" data-target="#editModal">Edit User</button></td>

                                 <td>
                                      {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}                       
                                          {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                      {{ Form::close() }}
                                  </td>
                             </tr>
                         @endforeach
                        </tbody>
                  </table>     
                </div>
              
        </section>
    </div>
    

    <div id="addModal" id="attributionModal" tabindex="-1"  class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title">Add User</h4>
            </div> 
            <div class="modal-body"> 
              @include('partials.addUserForm')
            </div>
          </div>
    </div>
  </div>


    <div id="editModal" id="attributionModal" tabindex="-1"  class="modal fade" role="dialog">
     <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" >&times;</button>
                <h4 class="modal-title">Edit User</h4>
            </div> 
            <div class="modal-body"> 
              @include('partials.editUserForm')
            </div>
          </div>
    </div>
  </div>

@else
    There are no users
@endif


@endsection


  