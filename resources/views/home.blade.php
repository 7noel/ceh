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
                            <thead>
                                <tr>
                                    <th scope="col">Cantidad de camas</th>
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
                            <div class="col-sm-12">
                                <label for="email">Correo electrónico</label>
                                <input type="text" class="form-control form-control-sm" id="email">
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
