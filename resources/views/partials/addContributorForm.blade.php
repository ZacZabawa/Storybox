

 <form class="form-horizontal" role="form" method="POST" action="{{ url('/contributors') }}">
                        {!! csrf_field() !!}

<div class="form-group" margin-right=10px>
    {!! Form::label('First Name') !!}
    {!! Form::text('firstName', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'First Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Last Name', 'class'=>'col-md-4 control-label') !!}
    {!! Form::text('lastName', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Last Name')) !!}
</div>
      
<div class="form-group">
       <label class="col-md-4 control-label">Community</label>
       {!! Form::select('community_id', $communities,
         array('required',
                'class'=>'form-control', 
                ))!!}
        
        </div>

<div class="form-group">
    {!! Form::label('Email') !!}
    {!! Form::text('email', null, 
        array( 
              'class'=>'form-control', 
              'placeholder'=>'Email')) !!}
</div>

<div class="form-group">
    {!! Form::label('Consent Form') !!}
    {!!Form::checkbox('consent_form', 'value');, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>


<div class="form-group">
    {!! Form::submit('submit', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
