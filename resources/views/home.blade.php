@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Solicitud de alojamiento</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
                        <table class="table">
                            <label for="exampleInputEmail1">Cantidad de camas:</label>
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Individuales</th>
                                    <th scope="col">Dobles</th>
                                    <th scope="col">Queen/King</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Primera Habitación</td>
                                    <td><input type="number" class="form-control form-control-sm" id="dpto"></td>
                                    <td><input type="number" class="form-control form-control-sm" id="dpto"></td>
                                    <td><input type="number" class="form-control form-control-sm" id="dpto"></td>
                                </tr>
                                <tr>
                                <td>Segunda Habitacion</td>
                                    <td><input type="number" class="form-control form-control-sm" id="dpto"></td>
                                    <td><input type="number" class="form-control form-control-sm" id="dpto"></td>
                                    <td><input type="number" class="form-control form-control-sm" id="dpto"></td>
                                    </tr>
                                <tr>
                                <td>Tercera Habitacion</td>
                                    <td><input type="number" class="form-control form-control-sm" id="dpto"></td>
                                    <td><input type="number" class="form-control form-control-sm" id="dpto"></td>
                                    <td><input type="number" class="form-control form-control-sm" id="dpto"></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="piso">¿En que planta están las Habitaciones?</label>
                                <input type="text" class="form-control form-control-sm" id="piso" aria-describedby="emailHelp">
                            </div>
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
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre de anfitrión</label>
                            <input type="text" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <label for="exampleInputPassword1">Dirección</label>
                                <input type="text" class="form-control form-control-sm" id="exampleInputPassword1">
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
                                <label for="telefono">Telefono de casa</label>
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
                                <label for="condicion">Condiciones de las habitaciones</label>
                                <select class="form-control form-control-sm">
                                    <option selected>Seleccionar</option>
                                    <option value="1">Excelente</option>
                                    <option value="2">Buena</option>
                                    <option value="3">Regular</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row text-info">
                            <div class="col-sm-6">
                                <label for="secretario">Secretario</label>
                                <input type="text" class="form-control form-control-sm" id="secretario">
                            </div>
                            <div class="col-sm-6">
                                <label for="email2">Correo electrónico</label>
                                <input type="email" class="form-control form-control-sm" id="email2">
                            </div>
                        </div>
                        <div class="form-group row text-info">
                            <div class="col-sm-6">
                                <label for="telefono1">Telefono de casa</label>
                                <input type="text" class="form-control form-control-sm" id="telefono1">
                            </div>
                            <div class="col-sm-6">
                                <label for="celular2">Celular</label>
                                <input type="text" class="form-control form-control-sm" id="celular2">
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="email">Observaciones</label>
                                <textarea name="area" id="" cols="30" rows="4" class= "form-control form-control-sm"></textarea>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Aprobado</label>
                        </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
