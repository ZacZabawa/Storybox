

{!! Form::open(array('route' => 'tekpoints.store')) !!}

<div class="form-group" margin-right=10px>
    {!! Form::label('Traditional Place Name') !!}
    {!! Form::text('tradPlaceName', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Traditional Place Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Current Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Current Place Name')) !!}
</div>

   <div class="form-group">
       <label >Contributor</label>
       {!! Form::select('contributor_id[]', $contributors, 'required',['id' => 'tag_list', 'class'=>'form-control', 'multiple'])!!}
        
        </div>



<div class="form-group">
    {!! Form::label('Contextual Description') !!}
    {!! Form::textarea('description', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Description Here')) !!}
</div>
{{ Form::hidden('y', '-122.2141238') }}  
{{ Form::hidden('x', '50.76711491') }} 
{{ Form::hidden('icon', 'yes') }}  
{{ Form::hidden('zid', '0') }}
{{ Form::hidden('elev', '0') }}    
<div class="dz-message">

                </div>

              

                <div class="dropzone-previews" id="dropzonePreview"></div>

                <h4 style="text-align: center;color:#428bca;">Drop or click to add media files <span class="glyphicon glyphicon-hand-down"></span></h4>

<br>
  
<div class="form-group">
    {!! Form::submit('submit', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}


