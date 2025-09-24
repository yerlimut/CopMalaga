@extends('layouts.app')

@section('title')
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">Administrar Clientes</h1>
@endsection

@section('Content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
            <a href="{{ route('welcome') }}">
                <i class="bi bi-arrow-left iconBack"></i>
            </a>

            <a href="{{ route('clientes.create') }}" class="crearBtn">
                <i class="bi bi-plus-circle"></i> Nuevo Cliente
            </a>

            @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'success',
                            title: '¡Éxito!',
                            text: "{{ session('success') }}",
                            confirmButtonText: 'Aceptar',
                            timer: 3000
                        });
                    });
                </script>
            @endif
        </div>


        <div class="card shadow-lg rounded-3">
            <div class="card-body table-responsive">
                <table class="table table-striped table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Tipo Documento</th>
                            <th>Número Documento</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Dirección</th>
                            <th>Fecha de Registro</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->nombres }}</td>
                                <td>{{ $cliente->apellidos }}</td>
                                <td>{{ $cliente->tipoDocumento }}</td>
                                <td>{{ $cliente->numeroDocumento }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->direccion }}</td>
                                <td>{{ $cliente->fechaRegistro }}</td>
                                <td>{{ $cliente->fechaNacimiento }}</td>
                                <td>{{ $cliente->estado == 1 ? 'Activo' : 'Inactivo' }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('clientes.edit', $cliente->id) }}"
                                           class="btnActualizar d-flex gap-2">
                                            <i class="bi bi-pencil-square"></i> Actualizar
                                        </a>

                                        <form action="{{ route('clientes.destroy', $cliente->id) }}"
                                              method="POST"
                                              class="d-inline"
                                              onsubmit="confirmarEliminacion(event)">
                                            @csrf
                                            <button type="submit" class="btnEliminar d-flex gap-2">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12" class="text-muted">No hay clientes registrados.</td>
                            </tr>
                        @endforelse

                        @if(session('error'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    Swal.fire({
                                        icon: 'error',
                                        title: '¡Atención!',
                                        text: "{{ session('error') }}",
                                        confirmButtonText: 'Aceptar',
                                    });
                                });
                            </script>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function confirmarEliminacion(event) {
            event.preventDefault();
            const form = event.target.closest('form');

            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    </script>
@endsection
