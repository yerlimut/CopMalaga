@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('titleContent')
    <h1 class="text-center py-4">Dashboard</h1>
@endsection

@section('Content')
                   
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Medios de pago</h5>
                        <p class="card-text">Apartado para gestionar los metodos de pago.</p>
                        <a href="" class="btn btn-primary">Gestionar medios de pago</a>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Mora</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="" class="btn btn-primary">Gestionar Mora</a>
                    </div>
                </div>
            </div>


            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Pagos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="" class="btn btn-primary">Gestionar Pagos</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Prestamos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="" class="btn btn-primary">Gestionar Prestamos</a>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Tipo Prestamos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="" class="btn btn-primary">Gestionar Tipo Prestamos</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Estado de Prestamos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="" class="btn btn-primary">Estado de Prestamo</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> Clientes </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>

                        <a href="{{route('clientes.index')}}" class="btn btn-primary">Clientes</a>

                    </div>
                </div>
            </div>

@endsection
