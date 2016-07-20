
{{-- {!! Form::open(array('route' => 'welcome.store')) !!} --}}

<div class="form-group" margin-right=10px>
    {!! Form::label('Name') !!}
    {!! Form::text('', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Email') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Email Address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('Type message here', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>




<div class="form-group">
    {!! Form::submit('submit', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
