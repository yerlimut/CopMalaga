@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('titleContent')
    <h1 class="text-center my-5 display-4">Dashboard</h1>
@endsection

@section('Content')
<div class="container py-4">
    <div class="row justify-content-center">

       
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold mb-3">Clientes</h5>
                    <p class="card-text text-muted">
                      Guarda la información personal y de contacto de los clientes.
                    </p>
                    <a href="" class="btn btn-outline-primary rounded-pill px-4">Ver</a>
                </div>
            </div>
        </div>

      
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold mb-3">Prestamos</h5>
                    <p class="card-text text-muted">
                    Registra los préstamos con fechas, valores, cuotas, estado y cliente asociado.
                    </p>
                    <a href="" class="btn btn-outline-primary rounded-pill px-4">Ver</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold mb-3">Pagos</h5>
                    <p class="card-text text-muted">
                     Controla los pagos realizados, con fecha, medio de pago, valor y mora.
                    </p>
                    <a href="" class="btn btn-outline-primary rounded-pill px-4">Ver</a>
                </div>
            </div>
        </div>

  
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold mb-3">Tipo de Prestamos</h5>
                    <p class="card-text text-muted">
                       Define los diferentes tipos de préstamo y sus intereses.
                    </p>
                    <a href="" class="btn btn-outline-primary rounded-pill px-4">Ver</a>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold mb-3">Estado de Prestamos</h5>
                    <p class="card-text text-muted">
                       Indica el estado actual del préstamo 
                    </p>
                    <a href="" class="btn btn-outline-primary rounded-pill px-4">Ver</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold mb-3">Medio de Pago</h5>
                    <p class="card-text text-muted">
                     Lista los métodos de pago disponibles (efectivo, tarjeta, transferencia).
                    </p>
                    <a href="" class="btn btn-outline-primary rounded-pill px-4">Ver</a>
                </div>
            </div>
        </div>


        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold mb-3">Mora</h5>
                    <p class="card-text text-muted">
                       Registra las penalizaciones por retraso en los pagos según tiempo y valor.
                    </p>
                    <a href="" class="btn btn-outline-primary rounded-pill px-4">Ver</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
