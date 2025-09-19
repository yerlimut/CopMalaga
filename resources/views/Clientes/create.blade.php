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

                    <form action="{{ route ('clientes.store')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nombres" class="form-label">nombres</label>
                            <input type="text" id="nombres" name="nombres" class="form-control @error('') is-invalid @enderror " >

                             @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                      
                   
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control @error('') is-invalid @enderror" >
                                @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                        
                        <div class="mb-3">
                            <label for="tipoDocumento" class="form-label">tipoDocumento</label>
                            <input type="text" id="tipoDocumento" name="tipoDocumento" class="form-control @error('') is-invalid @enderror" >
                                @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                        
                        <div class="mb-3">
                            <label for="numeroDocumento" class="form-label">numeroDocumento</label>
                            <input type="text" id="numeroDocumento" name="numeroDocumento" class="form-control @error('') is-invalid @enderror" >
                                @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                        
                        <div class="mb-3">
                            <label for="telefono" class="form-label">telefono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control @error('') is-invalid @enderror" >
                                @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="text" id="email" name="email" class="form-control @error('') is-invalid @enderror" >
                                @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>

                           <div class="mb-3">
                            <label for="direccion" class="form-label">direccion</label>
                            <input type="text" id="direccion" name="direccion" class="form-control @error('') is-invalid @enderror" >
                                @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>




                           <div class="mb-3">
                            <label for="fechaRegistro" class="form-label">fechaRegistro</label>
                            <input type="date" id="fechaRegistro" name="fechaRegistro" class="form-control @error('') is-invalid @enderror" >
                                @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>

                          <div class="mb-3">
                            <label for="fechaNacimiento" class="form-label">fechaNacimiento</label>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control @error('') is-invalid @enderror" >
                                @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            
                        </div>
                          <div class="mb-3">
                            <label for="estado" class="form-label">estado</label>
                            <select type="boolean" id="estado" name="estado" class="form-control @error('') is-invalid @enderror" >
                                @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
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
