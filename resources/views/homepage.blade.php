@extends('layouts.master')
@section('title', 'Karjoo | جستجوگر فرصتهای شغلی' )
@section('items')
<ul class="nav navbar-nav navbar-right">
  <li class="active navbar-right"><a href="#">جستجو در مشاغل</a></li>
  <li class="navbar-right"><a href="#">جستجو در رزومه</a></li>
  <li class="navbar-right"><a href="#">ارسال رزومه</a></li>
  <li class="navbar-right"><a href="#">تماس با ما</a></li>
</ul>
@stop

@section('logo-place')
<div class="row"  style="margin-top: 80px;">
	<div class="col-md-3"></div> 
	<div class="col-md-6">
		<div class="row" style="margin: 50px 0 0 0">
			<div class="col-md-3 text-center"  style="float: right !important; position: relative; top: 15px;">
				<img class="img-responsive" width="100" height="100" src="<?php echo asset('css/logo.png'); ?>">
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-6 text-right">
				<h1 class="logo-title">کارجو</h1>
				<p class="logo-desc">اولین جستجوگر فرصتهای شغلی در ایران</p>
			</div>
		</div>
	</div> 
	<div class="col-md-3"></div>
</div>
@stop

@section('form-wrapper')
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="form-wrapper cf">
			<div class="row">
			{!! Form::open(array('route' => 'jobs_store', 'class' => 'form')) !!}
				 <div id="mob"><div class="col-xs-5 text-center" id="inp1" style="float: right">
				 {!! Form::text('job_title', null,
					  array('required', 
							  'class'=>'mr15', 
							  'placeholder'=>'نام شغل، فرصت شغلی را وارد کنید')) !!}</div>
				 <div class="col-xs-5 text-center" id="inp2" style="float: right">
				 {!! Form::text('city', null, 
					  array('required', 
							  'class'=>'mr15', 
							  'placeholder'=>'نام شهر را وارد کنید')) !!}</div></div>
				<div id="sbmb"<div class="col-md-2">
				 {!! Form::submit('بگرد', 
					array('class'=>'button')) !!}</div></div>
			{!! Form::close() !!}
			</div>
		</div>
	<div class="col-md-2"></div>
</div>
@stop

@section('footer') 
<div class= "navbar navbar-inverse navbar-fixed-bottom">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>                        
			</button>
		</div>
	<div class="collapse navbar-collapse" id="footer" style="font-size: 16px; direction:rtl;">
		<div class="collapse navbar-collapse" id="footer" style="font-size: 16px; direction:rtl;">
	<ul class="nav navbar-nav" style="font-size: 18px;">
	  <li class="navbar-right hoverimg"><a href="#">سایتها</a></li>
	  <li class="navbar-right hoverimg"><a href="#">مقررات استفاده</a></li>
	  <li class="navbar-right hoverimg"><a href="#">درباره ما</a></li>
	  <li class="navbar-right hoverimg"><a href="#">اسپانسرها</a></li>
	</ul>
</div>
	</div>
	</div>
</div>
@stop