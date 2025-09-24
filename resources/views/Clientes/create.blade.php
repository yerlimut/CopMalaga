@extends('layouts.app')

@section('title')
    Crear Cliente
@endsection

@section('titleContent')
@endsection

@section('Content')

    <div>
        <form action="{{ route('clientes.store') }}"
            class="d-flex justify-content-center align-items-center min-vh-100"
            method="POST">
            @csrf

            <div class="form shadow p-4" style="min-width: 320px; max-width: 900px; width: 100%;">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <a href="{{ route('clientes.index') }}">
                        <i class="bi bi-arrow-left iconBack"></i>
                    </a>
                    <h2 class="m-0">Crear Cliente</h2>
                </div>

                <div class="row">
                    <!-- Columna izquierda -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nombres" class="form-label">Nombres</label>
                            <input type="text" id="nombres" name="nombres"
                                class="form-control @error('nombres') is-invalid @enderror">
                            @error('nombres')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tipoDocumento" class="form-label">Tipo de Documento</label>
                            <select id="tipoDocumento" name="tipoDocumento"
                                class="form-select @error('tipoDocumento') is-invalid @enderror">
                                <option value="" selected disabled>Seleccione una opción</option>
                                <option value="Cedula De Ciudadania">Cédula de Ciudadanía</option>
                                <option value="Tarjeta De Identidad">Tarjeta de Identidad</option>
                            </select>
                            @error('tipoDocumento')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="numeroDocumento" class="form-label">Número de Documento</label>
                            <input type="number" id="numeroDocumento" name="numeroDocumento"
                                class="form-control @error('numeroDocumento') is-invalid @enderror">
                            @error('numeroDocumento')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="number" id="telefono" name="telefono"
                                class="form-control @error('telefono') is-invalid @enderror">
                            @error('telefono')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="fechaRegistro" class="form-label">Fecha de Registro</label>
                            <input type="date" id="fechaRegistro" name="fechaRegistro"
                                class="form-control @error('fechaRegistro') is-invalid @enderror">
                            @error('fechaRegistro')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Columna derecha -->
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" id="apellidos" name="apellidos"
                                class="form-control @error('apellidos') is-invalid @enderror">
                            @error('apellidos')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" name="email"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" id="direccion" name="direccion"
                                class="form-control @error('direccion') is-invalid @enderror">
                            @error('direccion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento"
                                class="form-control @error('fechaNacimiento') is-invalid @enderror">
                            @error('fechaNacimiento')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select id="estado" name="estado"
                                class="form-select @error('estado') is-invalid @enderror">
                                <option value="">Seleccione un estado</option>
                                <option value="0">Activo</option>
                                <option value="1">Inactivo</option>
                            </select>
                            @error('estado')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-success rounded-pill px-4">Crear</button>
                </div>
            </div>
        </form>
    </div>

@endsection
