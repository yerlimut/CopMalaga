@extends('layouts.app')

@section('title')
@endsection

@section('titleContent')
@endsection

@section('Content')

<div class="container">
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST" class="d-flex justify-content-center align-items-center min-vh-100">
        @csrf

        <div class="d-flex flex-column form shadow p-4 gap-3 w-100" style="max-width: 700px;">

            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('clientes.index') }}">
                    <i class="bi bi-arrow-left iconBack"></i>
                </a>
                <h2>Actualizar Cliente</h2>
            </div>

            <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" id="nombres" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ $cliente->nombres }}">
                @error('nombres')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ $cliente->apellidos }}">
                @error('apellidos')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tipoDocumento" class="form-label">Tipo de Documento</label>
                <select class="form-select @error('tipoDocumento') is-invalid @enderror" name="tipoDocumento" id="tipoDocumento">
                    <option value="" disabled>Seleccione una opción</option>
                    <option value="Cedula De Ciudadania" {{ $cliente->tipoDocumento == 'Cedula De Ciudadania' ? 'selected' : '' }}>Cédula de Ciudadanía</option>
                    <option value="Tarjeta De Identidad" {{ $cliente->tipoDocumento == 'Tarjeta De Identidad' ? 'selected' : '' }}>Tarjeta de Identidad</option>
                </select>
                @error('tipoDocumento')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="numeroDocumento" class="form-label">Número de Documento</label>
                <input type="number" id="numeroDocumento" name="numeroDocumento" class="form-control @error('numeroDocumento') is-invalid @enderror" value="{{ $cliente->numeroDocumento }}">
                @error('numeroDocumento')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" id="telefono" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ $cliente->telefono }}">
                @error('telefono')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $cliente->email }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" id="direccion" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ $cliente->direccion }}">
                @error('direccion')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fechaRegistro" class="form-label">Fecha de Registro</label>
                <input type="date" id="fechaRegistro" name="fechaRegistro" class="form-control @error('fechaRegistro') is-invalid @enderror" value="{{ $cliente->fechaRegistro }}">
                @error('fechaRegistro')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" value="{{ $cliente->fechaNacimiento }}">
                @error('fechaNacimiento')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-select @error('estado') is-invalid @enderror" name="estado" id="estado">
                    <option value="">Seleccione un estado</option>
                    <option value="0" @if ($cliente->estado == '0') selected @endif>Activo</option>
                    <option value="1" @if ($cliente->estado == '1') selected @endif>Inactivo</option>
                </select>
                @error('estado')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-outline-dark">Actualizar</button>
            </div>

        </div>
    </form>
</div>

@endsection
