					<table class="table table-hover table-sm">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Tipo</th>
								<th>phone</th>
								<th>Email jw</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($models as $model)
							<tr data-id="{{ $model->id }}">
								<td>{{ $model->id }}</td>
								<td>{{ $model->full_name }} </td>
								<td>{{ $model->tipo }} </td>
								<td>{{ $model->phone }} </td>
								<td>{{ $model->email_jw }} </td>
								<td>
									<div class="d-flex flex-nowrap">
										
										<a href="{{ route($routes['show'] , $model) }}" class="btn btn-outline-info btn-sm" title="Ver">{!! config('options.icons.view') !!}</a>
										<a href="{{ route($routes['edit'] , $model) }}" class="btn btn-outline-primary btn-sm" title="Editar">{!! config('options.icons.edit') !!}</a>
										<a href="#" class="btn btn-outline-danger btn-sm" title="Eliminar">{!! config('options.icons.remove') !!}</a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
