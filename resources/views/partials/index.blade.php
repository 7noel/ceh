@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				@if(Session::has('message'))
					<p class="alert alert-success">{{ Session::get('message') }}</p>
				@endif
				<div class="card-header"> {{ config($labels['index.panel']) }}
				</div>
				<div class="card-body">
					<div class="row justify-content-between">
						<div class="col-2">
							<a class="btn btn-outline-primary btn-sm" href="{{ route($routes['create']) }}" role="button">
								{!! config('options.icons.add') !!} {{ config($labels['index.create']) }}
							</a>
						</div>
						@include('partials.search')
					</div>
					<br>
					@include($views['table'])
					{!! $models->appends(\Request::only(['name']))->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>

{!! Form::open(['route'=> [$routes['delete'], ':_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
{!! Form::close() !!}

@endsection

@section('scripts')



@endsection