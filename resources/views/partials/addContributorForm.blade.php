
{{ Form::open(array('route' => 'contributors.store')) }}

 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="firstName" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lastName" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                           <label class="col-md-4 control-label">Phone Number</label>
                              <div class="col-md-6"> 
                            {!! Form::text('phone', null, 
                                array('null', 
                                      'class'=>'form-control', 
                                      'placeholder'=>'Phone Number')) !!}
                        </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      


                    <div class="form-group">
                         <label class="col-md-4 control-label">Community</label>
                         <div class="col-md-6">
                         {!! Form::select('community_id', $communities,
                          'required',['id' => 'select2', 'class'=>'form-control'])!!}
                          </div>
                    </div>
                         
                          <div class="form-group">
                           <label class="col-md-4 control-label">Signed Consent Form</label>
                              <div class="col-md-6"> 
                            {!! Form::checkbox('yes', 'consent', 
                                array('required', 
                                      'class'=>'form-control' 
                                      )) !!}
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 control-label">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Add Contributor
                                </button>
                            </div>
                        </div>
{!! Form::close() !!}
