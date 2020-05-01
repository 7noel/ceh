@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h5 class="card-footer">Anfitrión</h5>
                <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre de anfitrión</label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control form-control-sm" id="direccion">
                            </div>
                            <div class="col-sm-4">
                                <label for="dpto">Nro de dpto</label>
                                <input type="text" class="form-control form-control-sm" id="dpto">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="ciudad">Ciudad</label>
                                <input type="text" class="form-control form-control-sm" id="ciudad">
                            </div>
                            <div class="col-sm-6">
                                <label for="provincia">Provincia</label>
                                <input type="text" class="form-control form-control-sm" id="provincia">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="telefono">Teléfono de casa</label>
                                <input type="text" class="form-control form-control-sm" id="telefono">
                            </div>
                            <div class="col-sm-6">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control form-control-sm" id="celular">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="email">Correo electrónico</label>
                                <input type="text" class="form-control form-control-sm" id="email">
                            </div>
                            <div class="col-sm-6">
                            </div>
                        </div>
                </div>
                <h5 class="card-footer">Congregación</h5>
                <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="congregacion">Congregación:</label>
                                <input type="text" class="form-control form-control-sm" id="congregacion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="secretario">Nombre del Coordinador</label>
                                <input type="text" class="form-control form-control-sm" id="secretario">
                            </div>
                            <div class="col-sm-6">
                                <label for="email2">Correo electrónico</label>
                                <input type="email" class="form-control form-control-sm" id="email2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="telefono1">Teléfono de casa</label>
                                <input type="text" class="form-control form-control-sm" id="telefono1">
                            </div>
                            <div class="col-sm-6">
                                <label for="celular2">Celular</label>
                                <input type="text" class="form-control form-control-sm" id="celular2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="secretario">Nombre del Secretario</label>
                                <input type="text" class="form-control form-control-sm" id="secretario">
                            </div>
                            <div class="col-sm-6">
                                <label for="email2">Correo electrónico</label>
                                <input type="email" class="form-control form-control-sm" id="email2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="telefono1">Teléfono de casa</label>
                                <input type="text" class="form-control form-control-sm" id="telefono1">
                            </div>
                            <div class="col-sm-6">
                                <label for="celular2">Celular</label>
                                <input type="text" class="form-control form-control-sm" id="celular2">
                            </div>
                        </div>
                </div>
                <h5 class="card-footer">Alojamiento y sus Habitaciones</h5>
                <div class="card-body">
                        <table class="table table-sm table-responsive">
                            <label for="exampleInputEmail1">Cantidad de camas:</label>
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Individuales</th>
                                    <th scope="col">Dobles</th>
                                    <th scope="col">Queen/King</th>
                                    <th scope="col">Planta</th>
                                    <th scope="col">SSHH</th>
                                    <th scope="col">Condiciones</th>
                                    <th scope="col">Fotos</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Primera Habitación</td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Propio</option>
                                            <option value="2">Compartido</option>
                                            <option value="3">Ninguna</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Excelente</option>
                                            <option value="2">Buena</option>
                                            <option value="3">Regular</option>
                                        </select>
                                    </td>
                                    <td><button type="button" class="btn btn-sm btn-outline-success"><i class="far fa-image"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Segunda Habitacion</td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Propio</option>
                                            <option value="2">Compartido</option>
                                            <option value="3">Ninguna</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Excelente</option>
                                            <option value="2">Buena</option>
                                            <option value="3">Regular</option>
                                        </select>
                                    </td>
                                    <td><button type="button" class="btn btn-sm btn-outline-success"><i class="far fa-image"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Tercera Habitacion</td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Propio</option>
                                            <option value="2">Compartido</option>
                                            <option value="3">Ninguna</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Excelente</option>
                                            <option value="2">Buena</option>
                                            <option value="3">Regular</option>
                                        </select>
                                    </td>
                                    <td><button type="button" class="btn btn-sm btn-outline-success"><i class="far fa-image"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="requisitos">Requisito de Huéspedes</label>
                                <select class="form-control form-control-sm">
                                    <option selected>Seleccionar</option>
                                    <option value="1">Sólo Mujeres</option>
                                    <option value="2">Sólo hombres</option>
                                    <option value="3">Matrimonio con hijos</option>
                                    <option value="4">Matrimonio sin hijos</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label for="requisitos">Condición de la casa</label>
                                        <select class="form-control form-control-sm">
                                            <option selected>Seleccionar</option>
                                            <option value="1">Excelente</option>
                                            <option value="2">Buena</option>
                                            <option value="3">Regular</option>
                                        </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="file-upload">Foto de Fachada <i class="far fa-image"></i></label>
                                <input type="file" class="form-control-file form-control-sm" id="file-upload">
                            </div>
                            <div id="file-preview-zone" class="col">
                            </div>
                        </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                            <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
