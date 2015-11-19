<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>@yield('title','PRINCIPAL') | SIGEPRE</title>

<!-- Google fonts 
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- animate.css -->
<link rel="stylesheet" href="{{asset('plugins/cyrus/animate.css')}}" />
<link rel="stylesheet" href="{{asset('plugins/cyrus/set.css')}}" />

<!-- gallery -->
<link rel="stylesheet" href="{{asset('plugins/cyrus/blueimp-gallery.min.css')}}">

<!-- favicon -->
<link rel="shortcut icon" href="{{asset('images/login.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('images/login.png')}}" type="image/x-icon">


<link rel="stylesheet" href="{{asset('plugins/cyrus/style.css')}}">

</head>

<body>
<!-- Menu principal de navegacion-->
@include('template.partials.nav2')

<!-- GENERANDO LOS CONTENIDOS-->

@yield('content')

<!-- FIN DE LOS CONTENIDOS -->
<!-- Footer Starts -->
<div id="contacto" class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a><a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-linkedin fa-2x"></i></a> </p>
Powered by: ®0n4ld</a>

<address>
  <strong>Empresa S.A.</strong><br>
  Avenida Siempre Viva<br>
  Ciudad, Provincia 00000<br>
  <abbr title="Phone">Tel:</abbr> 9XX 123 456
</address>
 
<address>
  <strong>Contactanos</strong><br>
  <a href="mailto:#">nombre.apellido@gmail.com</a>
</address>

</div>
<!-- # Footer Ends -->
<a href="#inicio" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>

<!-- jquery -->
<script src="{{asset('plugins/jquery/js/jquery.js')}}"></script>

<!-- POPUP en la web -->

<script src="{{asset('plugins/popup/modernizr-2.6.2.min.js')}}"></script>
<script src="{{asset('plugins/popup//jquery-1.10.2.min.js')}}"></script>

<!-- wow script -->
<script src="{{asset('plugins/jquery/js/wow.min.js')}}"></script>

<!-- boostrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>

</body>
</html>