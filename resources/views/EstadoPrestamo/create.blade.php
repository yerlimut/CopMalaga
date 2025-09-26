@extends('layouts.app')

@section('title', 'Administrar Estado de Prestamo ')

@section('titleContent')

@endsection

@section('Content')
<div>
    <form action="{{ route('estadoprestamo.store') }}" method="POST" class="d-flex justify-content-center align-items-center min-vh-100 ">
        @csrf
        <div class="d-flex flex-column form shadow p-4 gap-2">

            <div class="d-flex align-items-center gap-3">
                <a href="{{route('estadoprestamo.index')}}">
                    <i class="bi bi-arrow-left iconBack"></i>
                </a>
                <h2>Crear Estado de Prestamo</h2>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label ">Estado de Prestano</label>
                <select class="form-select @error('nombre') is-invalid @enderror" 
                    name="nombre" id="nombre">
                    <option value="">Seleccione un estado de prestamo</option>
                    <option value="Solicitado">Solicitado</option>
                    <option value="En anaisis">En anaisis</option>
                    <option value="Aprobado">Aprobado</option>
                    <option value="Rechazado">Rechazado</option>
                    <option value="Desembolso">Desembolso</option>
                    <option value="Activo">Activo</option>
                    <option value="Cancelado">Cancelado</option>
                </select>
                @error('nombre')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror

            </div>


            <div class="mb-4">
                <label class="form-label">Descripción</label>
                <input class="form-control @error('descripcion') is-invalid @enderror"
                    type="text" name="descripcion" id="descripcion"
                    placeholder="Ingrese una descripción">
                @error('descripcion')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div>



                <Button type="submit" class="btnCrear">Crear</Button>
            </div>

        </div>


    </form>


</div>

@endsection





</div>