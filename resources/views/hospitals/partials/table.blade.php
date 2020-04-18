					<table class="table table-hover table-sm">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Tipo</th>
								<th>Clase</th>
								<th>Prioridad</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($models as $model)
							<tr data-id="{{ $model->id }}">
								<td>{{ $model->id }}</td>
								<td>{{ $model->nombre }} </td>
								<td>{{ $model->tipo }} </td>
								<td>{{ $model->clase }} </td>
								<td>{{ $model->prioridad }} </td>
								<td>
									<a href="{{ route($routes['show'] , $model) }}" class="btn btn-outline-info btn-sm" title="Ver">{!! config('options.icons.view') !!}</a>
									<a href="{{ route($routes['edit'] , $model) }}" class="btn btn-outline-primary btn-sm" title="Editar">{!! config('options.icons.edit') !!}</a>
									<a href="#" class="btn btn-outline-danger btn-sm" title="Eliminar">{!! config('options.icons.remove') !!}</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
