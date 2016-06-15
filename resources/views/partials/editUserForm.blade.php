

{!! Form::open(array('url' => '/update')) !!}

<div class="form-group" margin-right=10px>
    {!! Form::label('Name') !!}
    {!! Form::text('TradPlaceName', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Full Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Email Address') !!}
    {!! Form::text('CurrentPlaceName', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email')) !!}
</div>

  

    <div class="form-group">
       <label >Community</label>
       {!! Form::select('community_id', $communities,'required', ['id' => 'select2', 'class'=>'form-control'])!!}  
     </div>

     <div class="form-group">
       <label >Role</label>
       {!! Form::select('role_id', $roles,'required', ['id' => 'select2', 'class'=>'form-control'])!!}  
     </div>

    <div class="form-group">
        {!! Form::submit('Edit User', 
          array('class'=>'btn btn-primary')) !!}
    </div>
{!! Form::close() !!}
