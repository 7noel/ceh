<div class="form-group row">
	<div class="col-sm-4">
		{!! Form::label('nombre','Nombre') !!}
		{!! Form::text('nombre', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('apaterno','Apellido Paterno') !!}
		{!! Form::text('apaterno', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('amaterno','Apellido Materno') !!}
		{!! Form::text('amaterno', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-4">
		{!! Form::label('tipo','Tipo') !!}
		{!! Form::select('tipo', config('options.select.people.tipo'), null, ['class'=>'form-control form-control-sm']); !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('phone','Telefono') !!}
		{!! Form::text('phone', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('congregacion', 'Congregación') !!}
		{!! Form::text('congregacion', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-4">
		{!! Form::label('hlc','HLC') !!}
		{!! Form::text('hlc', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('email_jw','Email jw') !!}
		{!! Form::text('email_jw', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('email', 'Email') !!}
		{!! Form::text('email', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-4">
		{!! Form::label('is_new','Nuevo?') !!}
		{!! Form::select('is_new', config('options.select.people.is_new'), null, ['class'=>'form-control form-control-sm']); !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('ceh_id','CEH Prinmcipal') !!}
		{!! Form::text('ceh_id', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
	<div class="col-sm-4">
		{!! Form::label('ceh2_id', 'CEH Secundario') !!}
		{!! Form::text('ceh2_id', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
</div>

@if(isset($model->groups[0]->id))
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
		@foreach ($model->groups[0]->hospitals as $hospital)
			<p>{{ $hospital->nombre }}</p>
		@endforeach
	</div>
	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<br>
		@foreach ($model->groups[0]->people as $person)
			<p>{{ $person->full_name." (".$person->tipo.")" }}</p>
		@endforeach
	</div>
	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
		<br>
		<p>Aún no disponible</p>
	</div>
</div>
@endif