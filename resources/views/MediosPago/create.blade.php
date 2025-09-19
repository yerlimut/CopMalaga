@extends('layouts.app')

@section('title')
    Crear Contenido
@endsection

@section('titleContent')

@endsection

@section('Content')

    <div>
        <form action="" class="d-flex justify-content-center align-items-center min-vh-100 " method="POST">

            <div>

                <img src="" alt="">
            </div>

            <div class="d-fex flex-column form shadow">
         
                <h2>Crear medio de pago</h2>
            
      
                <div class="mb-3">
                    <label for="medio_pago" class="form-label ">Medios de pago</label>
                    <select class="form-select" name="medio_pago" id="medio_pago">
                        <option value="">Seleccione un medio de pago</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjeta_credito">Tarjeta de Crédito</option>
                        <option value="tarjeta_debito">Tarjeta de Débito</option>
                        <option value="transferencia">Transferencia Bancaria</option>
                        <option value="nequi">Nequi</option>
                        <option value="daviplata">Daviplata</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label">Descripción</label>
                    <input class="form-control" type="text" name="descripcion" id="">
                </div>

                <div>

                
              <a href="" class="btn btn-outline-dark">Volver</a>
                    <Button type="submit">Crear</Button>
                </div>
            
          
            </div>


        </form>


    </div>

@endsection