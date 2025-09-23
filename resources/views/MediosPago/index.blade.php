@extends('layouts.app')

@section('title', 'Administrar Medios de Pago')

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">Administrar Medios de Pago</h1>
@endsection

@section('Content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="{{route('welcome')}}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Volver
            </a>

            <a href="{{ route('mediospago.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Crear nuevo Medio de Pago
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
                            <th>Medio de Pago</th>
                            <th>Descripción</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mediosPago as $medio)
                            <tr>
                                <td>{{ $medio->id }}</td>
                                <td>{{ $medio->nombre }}</td>
                                <td>{{ $medio->descripcion }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('mediospago.edit', $medio->id) }}" class="btn btn-outline-primary btn-sm">
                                            <i class="bi bi-pencil-square"></i> Actualizar
                                        </a>

                                        <form action="{{ route('mediospago.destroy', $medio->id) }}" method="POST"onclick="confirmarEliminacion(event)">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-muted">No hay medios de pago registrados.</td>
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
