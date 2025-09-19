@extends('layouts.app')

@section('title')
    Administrar Medios de Pago
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">Administrar Medios de Pago</h1>
@endsection

@section('Content')

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Volver
            </a>

            <a href="" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Crear nuevo Medio de Pago
            </a>
        </div>


        <div class="card shadow-lg rounded-3">
            <div class="card-body">
                <table class="table table-striped table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Medio  Pago</th>
                            <th>Descripción</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>


                            <!-- <div class="d-flex gap-3">
                                <a href="" class="btn btn-outline-primary">
                                    Actualizar
                                </a>

                                <form action="" method="">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>

                            </div> -->

                        </tr>






                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection