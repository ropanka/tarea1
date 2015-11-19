@extends('template.main')
@section('title','Login')
@section('content')
<br><br><br><br><br><br>
{!! Form::open(['route' => 'login','method'=>'POST']) !!}
	<div class="form-group">
	{!! Form::label('email','Correo Electronico') !!}
	{!! Form::email('email', null,['class'=>'form-control','placeholder'=>'mail@example.com']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Password','Password') !!}
	{!! Form::password('password',['class'=>'form-control','placeholder'=>'*******']) !!}
	</div>
	<div class="form-group">
	{!! Form::submit('Ingresar',['class'=>'btn-primary']) !!}
	</div>
{!! Form::close() !!}
@endsection