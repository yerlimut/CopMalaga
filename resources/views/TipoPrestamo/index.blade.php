@extends('layouts.app')

@section('title', 'Administrar Tipos de Prestamo')

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">Tipo de prestamo</h1>
@endsection

@section('Content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
            <a href="{{route('welcome')}}" >
                <i class="bi bi-arrow-left iconBack"></i>
            </a>

            <a href="{{ route('tipoprestamo.create') }}" class="crearBtn">
                <i class="bi bi-plus-circle"></i> Crear tipo prestamo 
            </a>
             @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
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
            <div class="card-body">
                <table class="table table-striped table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Intereses</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tipoprestamos as $prestamo)
                            <tr>
                                <td>{{ $prestamo->id }}</td>
                                <td>{{ $prestamo->nombre }}</td>
                                <td>{{ $prestamo->descripcion }}</td>
                                <td>{{ $prestamo->interes*100 }}%</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a  href="{{ route('tipoprestamo.edit', $prestamo->id) }}" class="btnActualizar d-flex gap-2">
                                            <i class="bi bi-pencil-square"></i> Actualizar
                                        </a>

                                        <form action="{{ route('tipoprestamo.destroy', $prestamo->id) }}" method="POST"onclick="confirmarEliminacion(event)">
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
                                <td colspan="4" class="text-muted">No hay tipo de prestamos registrados</td>
                            </tr>
                        @endforelse
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