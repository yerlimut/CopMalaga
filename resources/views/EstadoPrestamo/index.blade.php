@extends('layouts.app')

@section('title', 'Administrar Estado de Prestamo')

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">Administrar Estado de Prestamo</h1>
@endsection

@section('Content')
<div class="container"></class>

<div class="d-flex justify-content-between align-items-center gap-3 mb-4">
            <a href="{{route('welcome')}}" >
                <i class="bi bi-arrow-left iconBack"></i>
            </a>

            <a href="{{route('estadoprestamo.create')}}" class="crearBtn">
                <i class="bi bi-plus-circle"></i> Crear nuevo Estado de Prestamo
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
                            <th>nombre</th>
                            <th>descripción</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($estadoPrestamo as $estado)
                            <tr>
                                <td>{{ $estado->id }}</td>
                                <td>{{ $estado->nombre }}</td>
                                <td>{{ $estado->descripcion }}</td>
                                <td>
                        
                                    <div class="d-flex justify-content-center gap-2">
                                        <a  href="{{ route('estadoprestamo.edit', $estado->id) }}" class="btnActualizar d-flex gap-2">
                                            <i class="bi bi-pencil-square"></i> Actualizar
                                        </a>

                                        <form action="{{route('estadoprestamo.destroy', $estado->id)}}" method="POST" >
                                            @csrf
                                            <button type="submit" class="btnEliminar d-flex gap-2" onclick="confirmarEliminacion(event)">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No hay estados de prestamo registrados.</td>
                            </tr>
                        @endforelse
                   
                    </tbody>
                </table>
            </div>
        </div>
    </di>
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
