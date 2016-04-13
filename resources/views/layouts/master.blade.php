<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>@yield('title')</title>
	<link href="<?php echo asset('css/style.css');?>"  rel="stylesheet" />
</head>
<div class="wrapper">
<body>
<header>
	<div class="header">
		<div class="flt-r ib" style="width: 69.5%;">	
			<nav>
					<ul class="ib">
						<li class="ib ml10"><a href="#">جستجو در مشاغل</a></li>
						<li class="ib ml10"><a href="#">جستجو در رزومه</a></li>
						<li class="ib ml10"><a href="#">ارسال رزومه</a></li>
					</ul>
			</nav>
		</div><div class="flt-l" style="width:30%;">
		<ul class="ib">
			<li class="ib ml10"><a href="ali"><i class="karju-icon icon-signup" style="text-align: right; font-size: 4.3em;"></i></a></li>
			<li class="ib"><a href="ali"><i class="karju-icon icon-signup" style="text-align: right; font-size: 4.3em;"></i></a></li>
		</ul>
		</div><div class="clear"></div>
	</div>
</header>
	@yield('form-wrapper')
	@section('sidebar')
	<div class="container">
		@yield('content')
	</div>
	<footer>
	</footer>
</body>
</div>
</html>