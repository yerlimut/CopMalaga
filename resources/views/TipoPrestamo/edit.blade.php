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
                            <select class="form-select @error('') is-invalid @enderror " name="nombre" id="nombre">
                                  <option value="">Seleccione Un Tipo De Prestamo</option>
                                <option value="PrestamoPersonal"  @if ($tipoprestamo->nombre=='PréstamoPersonal') selected @endif>Préstamo Personal</option>
                                <option value="PrestamoHipotecario" @if ($tipoprestamo->nombre=='PréstamoHipotecario') selected @endif>Préstamo Hipotecario</option>
                                <option value="PrestamoDeVehículo" @if ($tipoprestamo->nombre=='PréstamodeVehículo') selected @endif>Préstamo de Vehículo</option>
                                <option value="PrestamoEducativo" @if ($tipoprestamo->nombre=='PréstamoEducativo') selected @endif>Préstamo Educativo</option>
                                <option value="PrestamoEmpresarial" @if ($tipoprestamo->nombre=='PréstamoEmpresarial') selected @endif>Préstamo Empresarial</option>
                                <option value="PrestamoDeLibreInversión" @if ($tipoprestamo->nombre=='PréstamodeLibreInversión') selected @endif>Préstamo de Libre Inversión</option>
                                <option value="PrestamoDeNómina" @if ($tipoprestamo->nombre=='PréstamodeNómina') selected @endif>Préstamo de Nómina</option>
                                <option value="PrestamoPignoraticio" @if ($tipoprestamo->nombre=='PréstamoPignoraticio') selected @endif>Préstamo Pignoraticio</option>
                            </select>
                             @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                      



                  <div class="mb-4">
                           <label class="form-label">Descripción</label>
                          <input class="form-control @error('') is-invalid @enderror" type="text" name="descripción"
                           id="descripción" placeholder="Ingrese una descripción"  value="{{$tipoprestamo->descripción }}">
                          
                            @error('')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>


                  <div class="mb-3">
                            <label for="intereses" class="form-label">Intereses</label>
                            <select class="form-select"  name="intereses" id="intereses">
                                <option value="15% – 30% anual"  @if ($tipoprestamo->intereses=='15% – 30% anual') selected @endif>15% – 30% anual</option>
                                <option value=" 8% – 15% anual"  @if ($tipoprestamo->intereses=='8% – 15% anual') selected @endif> 8% – 15% anual</option>
                                <option value="10% – 20% anual"  @if ($tipoprestamo->intereses=='10% – 20% anual') selected @endif>10% – 20% anual</option>
                                <option value="5% – 12% anual"  @if ($tipoprestamo->intereses=='5% – 12% anual') selected @endif>5% – 12% anual</option>
                                <option value="12% – 25% anual"  @if ($tipoprestamo->intereses=='12% – 25% anual') selected @endif>12% – 25% anual</option>
                                <option value="18% – 28% anual"  @if ($tipoprestamo->intereses=='18% – 28% anual') selected @endif>18% – 28% anual</option>
                                <option value="12% – 22% anual"  @if ($tipoprestamo->intereses=='12% – 22% anual') selected @endif>12% – 22% anual</option>
                                <option value="20% – 35% anual"  @if ($tipoprestamo->intereses=='20% – 35% anual') selected @endif>20% – 35% anual</option>
                           
                            </select>
                             @error('')
                    <div class="invalid-feedback">{{ $message}}</div>
                    @enderror
                        </div>
                <div>
                    <Button type="submit" class="btnCrearMedioPago">Actualizar

                    </Button>
                </div>
            </div>

        </form>
    </div>

@endsection