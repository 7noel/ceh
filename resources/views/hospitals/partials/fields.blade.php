<div class="form-group row">
	<div class="col-sm-6">
		{!! Form::label('nombre','Nombre') !!}
		{!! Form::text('nombre', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
	<div class="col-sm-6">
		{!! Form::label('alias','Alias') !!}
		{!! Form::text('alias', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-4">
		{!! Form::label('tipo','Tipo') !!}
		{!! Form::text('tipo', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('clase','Clase') !!}
		{!! Form::text('clase', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('prioridad','Prioridad') !!}
		{!! Form::select('prioridad', config('options.select.hospitals.prioridad'), null, ['class'=>'form-control form-control-sm']); !!}
	</div>
</div>


@if(isset($model->group->id))
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-hospital"></i> Hospitales</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-hospital-user"></i> Personas</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-home"></i> Casas</a>
	</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
		<br>
		@foreach ($model->group->hospitals as $hospital)
			<p>{{ $hospital->nombre }}</p>
		@endforeach
	</div>
	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<br>
		@foreach ($model->group->people as $person)
			<p>{{ $person->full_name." (".$person->tipo.")" }}</p>
		@endforeach
	</div>
	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
		<br>
		<p>Aún no disponible</p>
	</div>
</div>
@endif