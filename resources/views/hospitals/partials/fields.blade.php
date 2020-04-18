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
		{!! Form::text('prioridad', null, ['class'=>'form-control form-control-sm', 'required'=>'required']) !!}
	</div>
</div>