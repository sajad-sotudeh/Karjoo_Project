<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="{{ asset('css/style.css') }}"  rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script src="{{ asset('js/karjoo.js') }}"></script>
</head>
<div class="wrapper">
<body>
<div class= "navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>                        
			</button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar" style="font-size: 16px;">
			@yield('items')
			<ul class="nav navbar-nav">
			  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> ورود</a></li>
			  <li><a href="#"><span class="glyphicon glyphicon-user"></span> ثبت نام</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="container-fluid">
	@yield('logo-place')
	@yield('form-wrapper')
	@section('sidebar')
	@yield('content')
	@yield('footer')
</div>	
</body>
</html>