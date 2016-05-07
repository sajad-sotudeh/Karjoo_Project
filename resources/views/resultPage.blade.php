@extends('layouts.master')
@section('title', 'Karjoo | ' . $user_inputs[0] )

@section('items')
<ul class="nav navbar-nav navbar-right">
  <li class="navbar-right"><a href="#">جستجو در مشاغل</a></li>
  <li class="navbar-right"><a href="#">جستجو در رزومه</a></li>
  <li class="navbar-right"><a href="#">ارسال رزومه</a></li>
  <li class="navbar-right"><a href="#">تماس با ما</a></li>
</ul>
@stop

@section('form-wrapper')
<div class="row form-wrapper" style="margin-top: 53px;">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="cf">
			<div class="row">
			{!! Form::open(array('route' => 'jobs_store', 'class' => 'form')) !!}
				 <div id="mob"><div class="col-xs-5 text-center" id="inp1" style="float: right">
				 {!! Form::text('job_title', $user_inputs[0],
					  array('required', 
							  'class'=>'mr15' )) !!}</div>
				 <div class="col-xs-5 text-center" id="inp2" style="float: right">
				 {!! Form::text('city', $user_inputs[1], 
					  array('required', 
							  'class'=>'mr15')) !!}</div></div>
				<div id="sbmb"<div class="col-md-2">
				 {!! Form::submit('بگرد', 
					array('class'=>'button')) !!}</div></div>
				
			{!! Form::close() !!}
			</div>
	</div>
	<div class="col-md-2"></div>
</div>
<hr class="devider1">
@stop

@section('content')
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		@for( $i=0; $i < count($result); $i++ )
			<div class="list-group-item" style="margin-bottom: 15px; padding-bottom: 52px;">
				<h1 class="text-info" style="font-size: 20px;"><strong>{{ $result[$i]->jobTitle }}</strong></h1>
				<a class="text-info" href="{{ $result[$i] -> companyURL	}}" style="font-size: 16px;">{{ $result[$i]->companyName }}</a>
					<!--<span class="teaser">{{ $result[$i]->jobDescription }}</span>-->
					<div class="wrap" style="font-size:18px;">
					 <span>{{ mb_substr($result[$i]->jobDescription, 0, 110, 'UTF-8') }}</span>
					 <a class="readmorebtn text-success"><strong>&nbsp; بـیـشتر ...</strong></a>
					 <span class="more" style="display:none;">{{ mb_substr($result[$i]->jobDescription, 110, mb_strlen($result[$i]->jobDescription), 'UTF-8') }}</span>
					 <a class="readlessbtn text-danger" style="display:none"><strong>...کمتر&nbsp;</strong></a>
				</div>
				<input type="button" onclick="window.open('{{ $result[$i]->jobURL }}', '_blank');" value="مشاهده لینک" class="btn btn-primary" style="float: left; margin-top: 10px;" />
			</div>
		@endfor
	</div>
	<div class="col-md-2">
		
	</div>
</div>
@stop