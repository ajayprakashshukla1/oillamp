@extends('layouts.login')
@section('content')
<!-- BEGIN LOGIN FORM -->
<div id="page-wrapper">
  	<div class="row">
      	<div class="col-lg-12">
          	<h1 class="page-header">User Activation</h1>
      	</div>
  	</div>
  	<!-- /.row -->

  	<div class="row">  	
  		@if(isset($warning))
 			<div class="row">
   				<div class="col-md-6">
    				<div class="alert alert-danger">
        				<button class="close" data-close="alert"></button>
        				<span> {{ $warning }} </span>
     				</div>
    			</div>
 			</div>
 		@else
	    	{!! Form::open(['class'=>'activation-form','url'=>action('UserController@activation_success'), 'method'=>'post']) !!}
	    		{{ csrf_field() }}
	    
	    		<div class="row">
	        		<div class="col-md-6">
	            		<div class="form-group">
		                    {!! Form::label('password', 'Password', ['class' => 'control-label']); !!}
			                {!!  Form::password('password', ['class'=>'form-control form-control-solid placeholder-no-fix', 'type'=>'password' ,'autocomplete'=>'off', 'placeholder'=>'Password']); !!}
			               
			                @if($errors->has('password'))<span class="text-danger">{{ $errors->first('password')}}</span>@endif
	            		</div>
	       			</div>
	   			</div>
	   
	   			<div class="row">  
	       			<div class="col-md-6">           
	          			<div class="form-group">
			                {!! Form::label('cfnpassword', 'Confirm Password', ['class' => 'control-label']); !!}
			                {!!  Form::password('cfnpassword', ['class'=>'form-control form-control-solid placeholder-no-fix', 'type'=>'password' ,'autocomplete'=>'off', 'placeholder'=>'Confirm Password']); !!}

			                @if($errors->has('cfnpassword'))<span class="text-danger">{{ $errors->first('cfnpassword')}}</span>@endif
	          			</div>
	        		</div>
	    		</div>

	    		<div class="form-actions">
	    			{!! Form::hidden('email', $value = $user['email'], $attributes = ['type'=>'hidden']) !!}
	       	 		{!! Form::submit('Submit',['class'=>'btn btn-default uppercase']); !!}
	    		</div>              
	    	{!! Form::close() !!} 
		@endif	    	
  	</div>
</div>
@endsection