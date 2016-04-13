@extends('layouts.master')
@section('title', 'Karjoo | جستجوگر فرصتهای شغلی' )

@section('form-wrapper')
<div class="form-wrapper cf">
{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
    {!! Form::text('job_title', null, 
        array('required', 
              'class'=>'mr15', 
              'placeholder'=>'نام شغل، فرصت شغلی را وارد کنید')) !!}
    {!! Form::text('city', null, 
        array('required', 
              'class'=>'mr15', 
              'placeholder'=>'نام شهر را وارد کنید')) !!}
    {!! Form::submit('بیاب', 
      array('class'=>'button')) !!}
{!! Form::close() !!}
</div>
@stop