@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header"> {{ config($labels['show.panel']) }}
				</div>
				<div class="card-body">
					{!! Form::model($model, ['route' => $routes['store'], 'class'=>'']) !!}
					@include($views['fields'])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')



@endsection