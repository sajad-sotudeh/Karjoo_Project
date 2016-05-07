@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   {!! Form::open(array('route' => 'userCheck', 'class' => 'form')) !!}

					<div class="form-group">
						 {!! Form::text('username', null, 
							  array('class'=>'jobInput' )) !!}
					</div>

					<div class="form-group">
						 {!! Form::text('password', null, 
							  array('class'=>'cityInput')) !!}
					</div>

					<div class="form-group">
						 {!! Form::submit('بیاب', 
							array('class'=>'sbmtbtn')) !!}
					</div>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
