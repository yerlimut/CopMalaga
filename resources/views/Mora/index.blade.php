@extends('layouts.app')

@section('title', 'Administrar Mora')

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">Administrar Mora</h1>
@endsection

@section('Content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center gap-3 mb-4">
        <a href="">
            <i class="bi bi-arrow-left iconBack"></i>
        </a>

        <a href="}" class="crearBtn">
            <i class="bi bi-plus-circle"></i> Crear Mora
        </a>


    </div>

    <div class="card shadow-lg rounded-3">
        <div class="card-body">
            <table class="table table-striped table-hover align-middle text-center" id="myTable">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Fecha Inicial</th>
                        <th>Fecha Final</th>
                        <th>Valor mora</th>
                        <th>Observaciones</th>
                        <th>Estado Mora</th>
                    </tr>
                </thead>
                <tbody>


                    <td>
                        <!-- <div class="d-flex justify-content-center gap-2">
                                        <a  href=" " class="btnActualizar d-flex gap-2">
                                            <i class="bi bi-pencil-square"></i> Actualizar
                                        </a>

                                        <form action="">
                                            @csrf
                                            <button type="submit" class="btnEliminar d-flex gap-2">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </div> -->
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>


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