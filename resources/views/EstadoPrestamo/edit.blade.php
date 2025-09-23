@extends('layouts.app')

@section('title', 'Actualizar Estado de Prestamo')

@section('titleContent')

@endsection

@section('Content')
<div class="container">
    <form action="" class="d-flex justify-content-center align-items-center min-vh-100 ">
       


            <div class="d-flex flex-column form shadow p-4 gap-2">

                <div class="d-flex align-items-center gap-3">
                    <a href="">
                        <i class="bi bi-arrow-left iconBack"></i>
                    </a>
                    <h2>Actualizar Estado de Prestamo</h2>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label ">Estado de Prestano</label>
                    <select class="form-select" name="nombre" id="nombre" value="">
                        <option value="">Seleccione un estado de prestamo</option>
                        <option value="Solicitado">Solicitado</option>
                        <option value="En anaisis">En anaisis</option>
                        <option value="Aprobado">Aprobado</option>
                        <option value="Rechazado">Rechazado</option>
                        <option value="Desembolso">Desembolso</option>
                        <option value="Activo">Activo</option>
                        <option value="Cancelado">Cancelado</option>
                    </select>

                </div>

            
                <div class="mb-4">
                    <label class="form-label">Descripción</label>
                    <input class="form-control " type="text" name="descripcion" id="descripcion" value=""
                        placeholder="Ingrese una descripción">

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