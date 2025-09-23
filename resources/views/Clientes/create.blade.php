@extends('layouts.app')

@section('title')
@endsection

@section('titleContent')
    <h1 class="text-center my-4 display-5">Crear Cliente</h1>
@endsection

@section('Content')

<div class="container py-4">

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            
            <div class="mb-4 text-start">
                <a href="{{ route('clientes.index') }}" class="btn btn-outline-secondary rounded-pill px-4">  Volver  </a>
              
                
            </div>

 
            <div class="card shadow-sm rounded-4">
                <div class="card-body">


                    <form action="{{route('clientes.store')}}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label for="nombres" class="form-label">nombres</label>
                            <input type="text" id="nombres" name="nombres" class="form-control @error('nombres') is-invalid @enderror " >

                             @error('nombres')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                      
                   
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" >
                                @error('apellidos')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                        
                        <div class="mb-3">
                            <label for="tipoDocumento" class="form-label">tipoDocumento</label>
                            <input type="text" id="tipoDocumento" name="tipoDocumento" class="form-control @error('tipoDocumento') is-invalid @enderror" >
                                @error('tipoDocumento')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                        
                        <div class="mb-3">
                            <label for="numeroDocumento" class="form-label">numeroDocumento</label>
                            <input type="number" id="numeroDocumento" name="numeroDocumento" class="form-control @error('numeroDocumento') is-invalid @enderror" >
                                @error('numeroDocumento')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                        
                        <div class="mb-3">
                            <label for="telefono" class="form-label">telefono</label>
                            <input type="number" id="telefono" name="telefono" class="form-control @error('telefono') is-invalid @enderror" >
                                @error('telefono')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>

                           <div class="mb-3">
                            <label for="direccion" class="form-label">direccion</label>
                            <input type="text" id="direccion" name="direccion" class="form-control @error('direccion') is-invalid @enderror" >
                                @error('direccion')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>




                           <div class="mb-3">
                            <label for="fechaRegistro" class="form-label">fechaRegistro</label>
                            <input type="date" id="fechaRegistro" name="fechaRegistro" class="form-control @error('fechaRegistro') is-invalid @enderror" >
                                @error('fechaRegistro')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>

                          <div class="mb-3">
                            <label for="fechaNacimiento" class="form-label">fechaNacimiento</label>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" >
                                @error('fechaNacimiento')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                          <div class="mb-3">
                            <label for="estado" class="form-label">estado</label>

                            <select id="estado" name="estado" class="form-select  @error('estado') is-invalid @enderror">
                                <option value="">seleccione un estado</option>
                                <option value="0">activo</option>
                                <option value="1">inactivo</option>
                            </select>
                                @error('estado')
                        </div>





                      
                        <div class="text-end">
                            <button type="submit" class="btn btn-success rounded-pill px-4">  Crear    </button>
                            
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
