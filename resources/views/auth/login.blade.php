@extends('template.main')
@section('title','Login')
@section('content')
<br><br><br><br><br><br>
<div class="container">    
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">      

<div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Ingresar al Sistema</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Olvidaste tu contrseña?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                            
                        {!! Form::open(['route' => 'login','method'=>'POST']) !!}                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										{!! Form::text('nombre', null,['class'=>'form-control','placeholder'=>'Ingrese usuario']) !!}                                        
                            </div>                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        								{!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}                                
                            </div>                                 
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Recordar
                                        </label>
                                      </div>
                            </div>


                            <div style="margin-top:10px" class="form-group">
                                    <!-- Boton -->
                                    <div class="col-sm-12 controls">
                                      {!! Form::submit('Ingresar',['id'=>'btn-login','class'=>'btn btn-success']) !!}

                                    </div>
                            </div>

                            	<!--
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div> -->   
                            {!! Form::close() !!} 
                        </div>                     
                    </div>  
        </div>
    </div>
</div>



<!--
<div class="login-box">
	<div class="login-box-body">
	{!! Form::open(['route' => 'login','method'=>'POST']) !!}
		<div class="form-group">
		{!! Form::label('email','Correo Electronico') !!}
		{!! Form::email('email', null,['class'=>'form-control','placeholder'=>'mail@example.com']) !!}

		</div>
		<div class="form-group has-feedback">
		{!! Form::label('Password','Password') !!}
		{!! Form::password('password',['class'=>'form-control','placeholder'=>'*******']) !!}
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		<div class="form-group">
		{!! Form::submit('Ingresar',['class'=>'btn-primary']) !!}
		</div>
	{!! Form::close() !!}
	</div>
</div>-->
@endsection

