

{!! Form::open(array('url' => '/register')) !!}

<div class="form-group" margin-right=10px>
    {!! Form::label('Traditional Place Name') !!}
    {!! Form::text('TradPlaceName', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Traditional Place Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Current Name') !!}
    {!! Form::text('CurrentPlaceName', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Current Place Name')) !!}
</div>

   <div class="form-group">
       <label >Contributor</label>
       {!! Form::select('contributor_id', $contributors,
         array('required',
                'class'=>'form-control', 
                ))!!}
        
        </div>

               <div class="form-group">
       <label >Community</label>
       {!! Form::select('community_id', $communities,
         array('required',
                'class'=>'form-control', 
                ))!!}
        
        </div>


<div class="form-group">
    {!! Form::label('Contextual Description') !!}
    {!! Form::textarea('Description', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Description Here')) !!}
</div>

<div class="dz-message">

                </div>

                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>

                <div class="dropzone-previews" id="dropzonePreview"></div>

                <h4 style="text-align: center;color:#428bca;">Drop or click to add media files <span class="glyphicon glyphicon-hand-down"></span></h4>
  
<div class="form-group">
    {!! Form::submit('submit', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}


