@extends('layouts.app')

@section('title')
    Editar Marca
@endsection

@section('titleContent')

@endsection

@section('Content')

    <div class="container">


        <div>
            <form action="" class="d-flex justify-content-center align-items-center min-vh-100 " method="POST">

                <div>

                    <img src="" alt="">
                </div>

                <div class="d-fex flex-column form shadow">
                    <h2>Actualizar medio de pago</h2>
                    <div class="mb-3">
                        <label for="medio_pago" class="form-label ">Medios de pago</label>
                        <select class="form-select" name="medio_pago" id="medio_pago">
                            <option value="">Seleccione un medio de pago</option>
                            <option value="">Efectivo</option>
                            <option value="">Tarjeta de Crédito</option>
                            <option value="">Tarjeta de Débito</option>
                            <option value="">Transferencia Bancaria</option>
                            <option value="">Nequi</option>
                            <option value="">Daviplata</option>
                            <option value="">PayPal</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Descripción</label>
                        <input class="form-control" type="text" name="descripcion" value="">
                    </div>
                    <Button>Actualizar</Button>
                </div>


            </form>


        </div>


    </div>
    </div>

@endsection