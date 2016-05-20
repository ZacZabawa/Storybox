
  {!! Form::open(['url' => route('upload-post'), 'class' => 'dropzone', 'files'=>true, 'id'=>'real-dropzone']) !!}
  		

  		<div class="form-group">
       <label class="col-md-4 control-label">Knowledge Point or Area</label>
       {!! Form::select('Tekpoints_id', $tekpoints,
       	 array('required',
	              'class'=>'select2',
	              
	              'multiple',
	              'class'=>'form-control', 
	              ))!!}
        
        </div>
                
        
        <div class="form-group">
       
       <label class="col-md-4 control-label">Date Collected</label>
       {!! Form::select('contributor_id', $contributors,
       	 array('required',
	              'class'=>'form-control', 
	              ))!!}
        
        </div>

    

        <div class="form-group">
       <label class="col-md-4 control-label">Contributor</label>
       {!! Form::select('contributor_id', $contributors,
       	 array('required',
	              'class'=>'form-control', 
	              ))!!}
        
        </div>

               <div class="form-group">
       <label class="col-md-4 control-label">Community</label>
       {!! Form::select'community_id', $communities(,
       	 array('required',
	              'class'=>'form-control', 
	              ))!!}
        
        </div>

               <div class="form-group">
       <label class="col-md-4 control-label">Permission</label>
       {!! Form::select('contributor_id', $contributors,
       	 array('required',
	              'class'=>'form-control', 
	              ))!!}
        
        </div>

	   
	   <div class="form-group" >
	    <label class="col-md-4 control-label">Description</label>
	      <br>{!! Form::textarea('Type message here', null, 
	        array( 
	              'class'=>"col-md-6",
	              'class'=>'form-control', 
	              'placeholder'=>'Description')) !!}
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
	</form>
 
 