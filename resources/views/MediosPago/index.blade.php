@extends('layouts.app')

@section('title', 'Administrar Medios de Pago')

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">Administrar Medios de Pago</h1>
@endsection

@section('Content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
            <a href="{{route('welcome')}}" >
                <i class="bi bi-arrow-left iconBack"></i>
            </a>

            <a href="{{ route('mediospago.create') }}" class="crearBtn">
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
                <table class="table table-striped table-hover align-middle text-center"  id="myTable">
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
                                        <a  href="{{ route('mediospago.edit', $medio->id)  }} " class="btnActualizar d-flex gap-2">
                                            <i class="bi bi-pencil-square"></i> Actualizar
                                        </a>

                                        <form action="{{ route('mediospago.destroy', $medio->id) }}" method="POST"onclick="confirmarEliminacion(event)">
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


  @section('js')
    <script>
        $(function () {
            $('#myTable').DataTable({
                responsive: true,
                autoWidth: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                }
            });
        });
    </script>
@endsection
