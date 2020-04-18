@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header"> {{ config($labels['edit.panel']) }}
				</div>
				<div class="card-body">
					@include('partials.messages')

					{!! Form::model($model, ['route'=> [$routes['update'], $model] , 'method'=>'POST', 'class'=>'', 'enctype'=>"multipart/form-data"]) !!}
						@if(Request::url() != URL::previous())
						<input type="hidden" name="last_page" value="{{ URL::previous() }}">
						@endif
						@include($views['fields'])
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-outline-success" id="submit">{!! config('options.icons.save') !!} {{ config($labels['edit.update']) }}</button>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
			@include('partials.delete')
		</div>
	</div>
</div>

@endsection

@section('scripts')



@endsection