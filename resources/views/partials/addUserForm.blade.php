{{ Form::open(array('route' => 'users.store')) }}
                        {!! csrf_field() !!}

                        <div class="form-group" margin-right=10px>
    {!! Form::label('Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Full Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Email Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email')) !!}
</div>

{{ Form::hidden('password', 'password') }}  


     <div class="form-group">
       <label >Role</label>
       {!! Form::select('role_id', $roles,'required', ['id' => 'multiple', 'class'=>'form-control'])!!}  
     </div>

    <div class="form-group">
        {!! Form::submit('Add User', 
          array('class'=>'btn btn-primary')) !!}
    </div>
                    </form>