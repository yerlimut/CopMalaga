@extends('layouts.app')

@section('title')
    
@endsection

@section('titleContent')

@endsection

@section('Content')

    <div>
        <form action="" class="d-flex justify-content-center align-items-center min-vh-100 "
            method="POST">
            @csrf

           

            <div class="d-flex flex-column form shadow p-4 gap-2">

                <div class="d-flex align-items-center gap-3">
                    <a href="">
                        <i class="bi bi-arrow-left iconBack"></i>
                    </a>
                    <h2>Crear tipo de prestamo</h2>
                </div>


                  <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <select class="form-select @error('') is-invalid @enderror" name="nombre" id="nombre">
                                <option value="PrestamoPersonal">Préstamo Personal</option>
                                <option value="PrestamoHipotecario">Préstamo Hipotecario</option>
                                <option value="PrestamoDeVehículo">Préstamo de Vehículo</option>
                                <option value="PrestamoEducativo">Préstamo Educativo</option>
                                <option value="PrestamoEmpresarial">Préstamo Empresarial</option>
                                <option value="PrestamoDeLibreInversión">Préstamo de Libre Inversión</option>
                                <option value="PrestamoDeNómina">Préstamo de Nómina</option>
                                <option value="PrestamoPignoraticio">Préstamo Pignoraticio</option>
                            </select>
                             @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                      



                  <div class="mb-4">
                           <label class="form-label">Descripción</label>
                          <input class="form-control @error('') is-invalid @enderror" type="text" name="descripción"
                           id="descripción" placeholder="Ingrese una descripción">

                            @error('')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  
                  </div>


                  <div class="mb-3">
                            <label for="intereses" class="form-label">Intereses</label>
                            <select class="form-select @error('descripcion') is-invalid @enderror"  name="intereses" id="intereses">
                                <option value="15% – 30% anual">15% – 30% anual</option>
                                <option value=" 8% – 15% anual"> 8% – 15% anual</option>
                                <option value="10% – 20% anual">10% – 20% anual</option>
                                <option value="5% – 12% anual">5% – 12% anual</option>
                                <option value="12% – 25% anual">12% – 25% anual</option>
                                <option value="18% – 28% anual">18% – 28% anual</option>
                                <option value="12% – 22% anual">12% – 22% anual</option>
                                <option value="20% – 35% anual">20% – 35% anual
                                    
                                </option>

                                 @error('')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                           
                            </select>
        
                        </div>

                <div>

                    <Button type="submit" class="btnCrearMedioPago">Crear</Button>
                </div>


            </div>


        </form>


    </div>

@endsection