@extends('layouts.app')

@section('title', 'Actualizar Estado de Prestamo')

@section('titleContent')

@endsection

@section('Content')
<div class="container">
    <form action="{{ route('estadoprestamo.update', $estadoPrestamo->id) }}" method="POST" class="d-flex justify-content-center align-items-center min-vh-100 ">
        @csrf



        <div class="d-flex flex-column form shadow p-4 gap-2">

            <div class="d-flex align-items-center gap-3">
                <a href="{{route('estadoprestamo.index')}}" class="text-decoration-none text-dark">
                    <i class="bi bi-arrow-left iconBack"></i>
                </a>
                <h2>Actualizar Estado de Prestamo</h2>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label ">Estado de Prestano</label>
                <select class="form-select @error('nombre') is-invalid @enderror"
                    name="nombre" id="nombre" value="">
                    <option value="">Seleccione un estado de prestamo</option>
                    <option value="Solicitado" @if($estadoPrestamo->nombre === 'Solicitado') selected @endif>Solicitado</option>
                    <option value="En anaisis" @if($estadoPrestamo->nombre === 'En anaisis') selected @endif>En anaisis</option>
                    <option value="Aprobado" @if($estadoPrestamo->nombre === 'Aprobado') selected @endif>Aprobado</option>
                    <option value="Rechazado" @if($estadoPrestamo->nombre === 'Rechazado') selected @endif>Rechazado</option>
                    <option value="Desembolso" @if($estadoPrestamo->nombre === 'Desembolso') selected @endif>Desembolso</option>
                    <option value="Activo" @if($estadoPrestamo->nombre === 'Activo') selected @endif>Activo</option>
                    <option value="Cancelado" @if($estadoPrestamo->nombre === 'Cancelado') selected @endif>Cancelado</option>
                </select>
                @error('nombre')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>


            <div class="mb-4">
                <label class="form-label">Descripción</label>
                <input class="form-control @error('descripcion') is-invalid @enderror" 
                type="text" name="descripcion" id="descripcion" value="{{$estadoPrestamo->descripcion}}"
                    placeholder="Ingrese una descripción">
                    @error('descripcion')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>



                <Button type="submit" class="btnActualizar">Actualizar</Button>
            </div>

        </div>


    </form>


</div>

@endsection





</div>

</div>