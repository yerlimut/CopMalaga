@extends('layouts.app')

@section('title')
    Crear Contenido
@endsection

@section('titleContent')

@endsection

@section('Content')

    <div>
        <form action="" class="d-flex justify-content-center align-items-center min-vh-100 "
            method="POST">
            @csrf

            <div>

                <img src="" alt="">
            </div>

            <div class="d-flex flex-column form shadow p-4 gap-2">

                <div class="d-flex align-items-center gap-3">
                    <a href="{{ route('mediospago.index') }}">
                        <i class="bi bi-arrow-left iconBack"></i>
                    </a>
                    <h2>Crear medio de pago</h2>
                </div>

                <div class="mb-4">
                    <label class="form-label">Fecha Inicial</label>
                    <input class="form-control" type="date" name="fechaInicial"
                        id="fechaInicial" placeholder="Ingrese una fechaInicial">
                   
                </div>


                <div class="mb-4">
                    <label class="form-label">Fecha Final</label>
                    <input class="form-control" type="date" name="fechaFinal"
                        id="fechaFinal" placeholder="Ingrese una fechaFinal">
                   
                </div>

                <div class="mb-4">
                    <label class="form-label">Valor Mora </label>
                    <input class="form-control" type="decimal" name="valorMora"
                        id="valorMora" placeholder="Ingrese una valorMora">
                   
                </div>

                <div class="mb-4">
                    <label class="form-label">Observaciones</label>
                    <input class="form-control" type="text" name="observaciones"
                        id="observaciones" placeholder="Ingrese una observaciones">
                   
                </div>

                             <div class="mb-3">
                    <label for="estadoMora" class="form-label ">Estado Mora </label>
                    <select class="form-select" name="estadoMora" id="estadoMora">
                        <option value="paga">Paga</option>
                        <option value="pendiente">Pendiente</option>
                    </select>

                    <div>



                    <Button type="submit" class="btnCrearMedioPago">Crear</Button>
                </div>


            </div>


        </form>


    </div>

@endsection