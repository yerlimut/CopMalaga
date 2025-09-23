@extends('layouts.app')

@section('title')
@endsection

@section('titleContent')
    <h1 class="text-center my-4 display-5">Cliente</h1>
@endsection

@section('Content')
    <div class="container pb-5">

        <div class="mb-4 text-end">

            <a href="{{route('clientes.create')}}" class="btn btn-outline-primary rounded-pill px-4">

                + Nueva Cliente</a>

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

        <div class="table-responsive shadow-sm rounded-4">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>nombres</th>
                        <th>apellidos</th>
                        <th>tipoDocumento</th>
                        <th>numeroDocumento</th>
                        <th>telefono</th>
                        <th>email</th>
                        <th>direccion</th>
                        <th>fechaRegistro</th>
                        <th>fechaNacimiento</th>
                        <th>estado</th>
                        <th>Opciones</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
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

                                <a href="{{route('clientes.edit',$cliente->id)}}"class="btn btn-success btn-sm rounded-pill px-3 me-1"> Editar </a>




                                <form action="{{route('clientes.destroy',$cliente->id)}}" method="POST"
                                    class="d-inline" >
                                    @csrf

                                    <button class="btn btn-danger btn-sm rounded-pill px-3" onclick="confirmarEliminacion(event)"> Eliminar </button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if(session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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


        <div class="mt-4">
            <a href="{{ route('welcome') }}" class="btn btn-outline-secondary rounded-pill px-4">← Volver</a>
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
