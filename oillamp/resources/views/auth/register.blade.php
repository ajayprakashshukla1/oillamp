

@extends('layouts.app')
@section('content')
       


            <!-- BEGIN REGISTRATION FORM -->

            {!! Form::open(['class'=>'register-form','url'=>route('register'), 'method'=>'post', 'style'=>'display:block']) !!}
            {{ csrf_field() }}
                <div class="form-title">
                    <span class="form-title">Sign Up</span>
                </div>
                <p class="hint"> Enter your personal details below: </p>
                
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {!! Form::label('name', 'Full Name', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                     {!! Form::text('name', $value = old('name'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'Full Name' ,'required'=>'required']) !!} 
                     @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                     @endif
                </div>
                

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('email', 'Company Email', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                     {!! Form::text('email', $value = old('email'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'Company Email' ]) !!} 
                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                     @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::label('password', 'Password', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                     {!! Form::password('password',$attributes = ['class'=>'form-control placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'Password',  'id'=>'register_password']) !!} 
                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                     @endif
                </div>


                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                     {!! Form::password('password_confirmation',$attributes = ['class'=>'form-control placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'Confirm Password','required'=>'required']) !!} 
                     @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                     @endif
                </div>




                <div class="form-group{{ $errors->has('secondary_email') ? ' has-error' : '' }}">
                    {!! Form::label('secondary_email', 'Secondary Email', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                     {!! Form::text('secondary_email', $value = old('secondary_email'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'Secondary Email','required'=>'required' ]) !!} 
                     @if ($errors->has('secondary_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondary_email') }}</strong>
                                    </span>
                     @endif
                </div>


                <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                 {!! Form::label('mobile_no', 'Mobile no.', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                <div class="input-group">
                  <span class="input-group-addon">
                  {!! Form::select('mobile_no_country', $countryCode, old('mobile_no_country'),['style'=>'width:150px;height:34px','class'=>'form-control']); !!}
                  </span>
                  {!! Form::text('mobile_no', $value = old('mobile_no'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix number', 'autocomplete'=>'off' ,'placeholder'=>'Mobile No','required'=>'required' ,'max'=>'9999999999']) !!}
                </div>
                @if ($errors->has('mobile_no'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                                    </span>
                                                @endif

                </div>

                <div class="form-group{{ $errors->has('office_extension') ? ' has-error' : '' }}">
                 {!! Form::label('office_extension', 'Office Extension.', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
               
                  {!! Form::text('office_extension', $value = old('office_extension'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix number', 'autocomplete'=>'off' ,'placeholder'=>'Office Extension ','required'=>'required','max'=>'9999999999' ]) !!}
               
                @if ($errors->has('office_extension'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('office_extension') }}</strong>
                                                    </span>
                                                @endif
                </div>




           <div class="form-group{{ $errors->has('next_of_kin') ? ' has-error' : '' }}">
                    {!! Form::label('next_of_kin', 'Next Of Kin ', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                     {!! Form::text('next_of_kin', $value = old('next_of_kin'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'Next Of Kin ','required'=>'required' ]) !!} 
                     @if ($errors->has('next_of_kin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('next_of_kin') }}</strong>
                                    </span>
                     @endif
                </div>

          <div class="form-group{{ $errors->has('relationship_with_next_of_kin') ? ' has-error' : '' }}">
                    {!! Form::label('relationship_with_next_of_kin', 'Relationship With Next Of Kin', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                     {!! Form::text('relationship_with_next_of_kin', $value = old('relationship_with_next_of_kin'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'Relationship With Next Of Kin','required'=>'required' ]) !!} 
                     @if ($errors->has('relationship_with_next_of_kin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('relationship_with_next_of_kin') }}</strong>
                                    </span>
                     @endif
                </div>




                <div class="form-group{{ $errors->has('next_of_kin_phone_number') ? ' has-error' : '' }}">
                 {!! Form::label('next_of_kin_phone_number', 'Next Of Kin Phone Number.', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                
                  {!! Form::text('next_of_kin_phone_number', $value = old('next_of_kin_phone_number'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix number' , 'autocomplete'=>'off' ,'placeholder'=>'Next Of Kin Phone Number ','required'=>'required','max'=>'9999999999' ]) !!}
                
                @if ($errors->has('next_of_kin_phone_number'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('next_of_kin_phone_number') }}</strong>
                                                    </span>
                                                @endif
                </div>



          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                    {!! Form::label('address', 'Address', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                     {!! Form::text('address', $value = old('address'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'Address','required'=>'required' ]) !!} 
                     @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                     @endif
                </div>

            <div class="form-group{{ $errors->has('city_town') ? ' has-error' : '' }}">
                    {!! Form::label('city_town', 'City/Town', ['class' => 'control-label visible-ie8 visible-ie9']); !!}
                     {!! Form::text('city_town', $value = old('city_town'), $attributes = ['class'=>'form-control form-control-solid placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'City/Town','required'=>'required' ]) !!} 
                     @if ($errors->has('city_town'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_town') }}</strong>
                                    </span>
                     @endif
                </div>


 <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                    {!! Form::label('country', 'Country', ['class' => 'control-label visible-ie8 visible-ie9']); !!}

                     {!! Form::select('country', $countries, old('country'),$attributes = ['class'=>'form-control form-control-solid placeholder-no-fix', 'autocomplete'=>'off' ,'placeholder'=>'Country','required'=>'required' ]); !!}

                     @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                     @endif
                </div>
                
                <div class="form-actions">
                   <a type="button" href="{{ route('login') }}" id="back-btn" class="btn btn-default">Back</a>
                    {!! Form::submit('Register',['class'=>'btn red uppercase pull-right','id'=>'register-submit-btn']); !!}
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
@endsection