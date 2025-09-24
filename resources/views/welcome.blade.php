@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('titleContent')
    <h1 class="text-center py-4">💸 CopMalaga</h1>
@endsection

@section('Content')

<div class="container-fluid">
    <div class="row">

        <!-- Medios de Pago -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="/img/mediopago.jpg" class="card-img-top" alt="Medios de pago">
                <div class="card-body">
                    <h5 class="card-title">💳 Medios de Pago</h5>
                    <p class="card-text">Gestión de medios de pago.</p>
                    <a href="{{ route('mediospago.index') }}" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>

        <!-- Mora -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="/img/mora.jpg" class="card-img-top" alt="Mora">
                <div class="card-body">
                    <h5 class="card-title">⏰ Mora</h5>
                    <p class="card-text">Control y seguimiento de clientes en mora.</p>
                    <a href="#" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>

        <!-- Pagos -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="/img/pago.jpg" class="card-img-top" alt="Pagos">
                <div class="card-body">
                    <h5 class="card-title">💰 Pagos</h5>
                    <p class="card-text">Gestión de pagos realizados por los clientes.</p>
                    <a href="#" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>

        <!-- Préstamos -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="/img/prestamo.jpg" class="card-img-top" alt="Prestamos">
                <div class="card-body">
                    <h5 class="card-title">📄 Préstamos</h5>
                    <p class="card-text">Administración de préstamos otorgados.</p>
                    <a href="#" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>

        <!-- Tipo de Préstamos -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="/img/tipoprestamo.jpg" class="card-img-top" alt="Tipo de Prestamos">
                <div class="card-body">
                    <h5 class="card-title">🏷️ Tipo de Préstamos</h5>
                    <p class="card-text">Clasificación y gestión de tipos de préstamos.</p>
                    <a href="#" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>

        <!-- Estado de Préstamos -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="/img/estado.jpg" class="card-img-top" alt="Estado de Prestamos">
                <div class="card-body">
                    <h5 class="card-title">📊 Estado de Préstamos</h5>
                    <p class="card-text">Visualiza el estado actual de los préstamos.</p>
                    <a href="#" class="btn btn-primary">Ver Estado</a>
                </div>
            </div>
        </div>

        <!-- Clientes -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="/img/clientes.jpg" class="card-img-top" alt="Clientes">
                <div class="card-body">
                    <h5 class="card-title">👤 Clientes</h5>
                    <p class="card-text">Administración de información de clientes.</p>
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
