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
		{!! Form::select('is_new', config('options.select.people.tipo'), null, ['class'=>'form-control form-control-sm']); !!}
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
