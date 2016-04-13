@extends('layouts.master')
@section('title', 'Karjoo | ' . $result[0]->jobTitle )

@section('form-wrapper')
	{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::text('job_title', null, 
        array('class'=>'jobInput', 
              'placeholder'=> $result[0]->jobTitle)) !!}
</div>

<div class="form-group">
    {!! Form::text('city', null, 
        array('class'=>'cityInput', 
              'placeholder'=>$result[0]->city)) !!}
</div>

<div class="form-group">
    {!! Form::submit('بیاب', 
      array('class'=>'sbmtbtn')) !!}
</div>
{!! Form::close() !!}
@stop

@section('content')
@stop