@extends('layouts.app')

@section('title')
    Crear Contenido
@endsection

@section('titleContent')

@endsection

@section('Content')

    <div>
        <form action="{{ route('mediospago.store') }}" class="d-flex justify-content-center align-items-center min-vh-100 "
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



                <div class="mb-3">
                    <label for="nombre" class="form-label ">Medios de pago</label>
                    <select class="form-select @error('nombre') is-invalid @enderror" name="nombre" id="nombre">
                        <option value="">Seleccione un medio de pago</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjeta_credito">Tarjeta de Crédito</option>
                        <option value="tarjeta_debito">Tarjeta de Débito</option>
                        <option value="transferencia">Transferencia Bancaria</option>
                        <option value="nequi">Nequi</option>
                        <option value="daviplata">Daviplata</option>
                        <option value="paypal">PayPal</option>
                    </select>
                    @error('nombre')
                        <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">Descripción</label>
                    <input class="form-control @error('descripcion') is-invalid @enderror" type="text" name="descripcion"
                        id="descripcion" placeholder="Ingrese una descripción">
                    @error('descripcion')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div>



                    <Button type="submit" class="btnCrearMedioPago">Crear</Button>
                </div>


            </div>


        </form>


    </div>

@endsection