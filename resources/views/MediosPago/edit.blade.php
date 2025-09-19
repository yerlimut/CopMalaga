@extends('layouts.app')

@section('title')
Editar Medio de Pago
@endsection

@section('titleContent')

@endsection

@section('Content')

<div class="container">


    <div>
        <form action="{{ route('mediospago.update', $medioPago->id) }}" class="d-flex justify-content-center align-items-center min-vh-100 " method="POST">
            @csrf
            <div>

                <img src="" alt="">
            </div>

            <div class="d-fex flex-column form shadow">
                <h2>Actualizar medio de pago</h2>
                <div class="mb-3">
                    <label for="medio_pago" class="form-label ">Medios de pago</label>
                    <select class="form-select @error('nombre') is-invalid @enderror" name="nombre" id="nombre">
                        <option value="">Seleccione un medio de pago</option>
                        <option value="efectivo" @if ($medioPago->nombre=='efectivo') selected @endif>Efectivo</option>
                        <option value="tarjeta_credito" @if ($medioPago->nombre=='tarjeta_credito') selected @endif>Tarjeta de Crédito</option>
                        <option value="tarjeta_debito" @if ($medioPago->nombre=='tarjeta_debito') selected @endif>Tarjeta de Débito</option>
                        <option value="transferencia" @if ($medioPago->nombre=='transferencia') selected @endif>Transferencia Bancaria</option>
                        <option value="nequi" @if ($medioPago->nombre=='nequi') selected @endif>Nequi</option>
                        <option value="daviplata" @if ($medioPago->nombre=='daviplata') selected @endif>Daviplata</option>
                        <option value="paypal" @if ($medioPago->nombre=='paypal') selected @endif>PayPal</option>
                    </select>
                    @error('nombre')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label">Descripción</label>
                    <input class="form-control @error('descripcion') is-invalid @enderror" type="text" name="descripcion" value="{{ $medioPago->descripcion }}">
                    @error('descripcion')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <Button type="submit" class="btn btn-outline-dark">Actualizar</Button>
            </div>


        </form>


    </div>


</div>
</div>

@endsection