

{!! Form::model($user,['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

<div class="form-group" margin-right=10px>
    {!! Form::label('Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              )) !!}
</div>

<div class="form-group">
    {!! Form::label('Email Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              )) !!}
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
