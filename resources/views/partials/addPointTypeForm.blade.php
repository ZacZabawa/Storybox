{{ Form::open(array('route' => 'PointType.store')) }}
                        {!! csrf_field() !!}

                        <div class="form-group" margin-right=10px>
    {!! Form::label('Point Type') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>

{!! Form::label('Description') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Describe activities')) !!}
</div>



    <div class="form-group">
        {!! Form::submit('Add User', 
          array('class'=>'btn btn-primary')) !!}
    </div>
                    </form>