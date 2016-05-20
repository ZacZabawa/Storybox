@extends('layouts.app')

@section("navbarContent")
               
    @include("partials.NavBar")         

@endsection

@section('content')
<div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Import KML File</div>


    <div class="container">
        <div class="row">
            <div class="col-md-10">
            <br>
                {!! Form::open(array('url' => 'kml', 'method' =>'post', 'files' => true)) !!}
                	
                	<div class="form-group">
    					{!! Form::file('kmlFile') !!}
					</div>


                	<div class="form-group">
    					{!! Form::submit('Import KML!', array('class'=>'btn btn-primary')) !!}
					</div>

        <br>
                {!! Form::close() !!}
          
    </div>
    </div>
</div>
               </div>
    </div>
</div>
                <table class="table">
                    <tr>
                        <th>name</th>
                        <th>description</th>
                        <th>location</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
