@extends('layouts.app')

@section('title')
    
@endsection

@section('titleContent')

@endsection

@section('Content')

    <div>
        <form action="{{route('tipoprestamo.update', $tipoprestamo->id)}}" class="d-flex justify-content-center align-items-center min-vh-100 "
            method="POST">
            @csrf

           

            <div class="d-flex flex-column form shadow p-4 gap-2">

                <div class="d-flex align-items-center gap-3">
                    <a href="{{route('tipoprestamo.index')}}">
                        <i class="bi bi-arrow-left iconBack"></i>
                    </a>
                    <h2>Actualizar tipo de prestamo</h2>
                </div>


                  <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <select class="form-select @error('') is-invalid @enderror " name="nombre" id="nombre">
                                  <option value="">Seleccione Un Tipo De Prestamo</option>
                                <option value="PrestamoPersonal"  @if ($tipoprestamo->nombre=='PrestamoPersonal') selected @endif>Prestamo Personal</option>
                                <option value="PrestamoHipotecario" @if ($tipoprestamo->nombre=='PrestamoHipotecario') selected @endif>Prestamo Hipotecario</option>
                                <option value="PrestamoDeVehículo" @if ($tipoprestamo->nombre=='PrestamodeVehículo') selected @endif>Prestamo de Vehículo</option>
                                <option value="PrestamoEducativo" @if ($tipoprestamo->nombre=='PrestamoEducativo') selected @endif>Prestamo Educativo</option>
                                <option value="PrestamoEmpresarial" @if ($tipoprestamo->nombre=='PrestamoEmpresarial') selected @endif>Prestamo Empresarial</option>
                                <option value="PrestamoDeLibreInversion" @if ($tipoprestamo->nombre=='PrestamodeLibreInversion') selected @endif>Prestamo de Libre Inversión</option>
                                <option value="PrestamoDeNomina" @if ($tipoprestamo->nombre=='PrestamodeNomina') selected @endif>Prestamo de Nomina</option>
                                <option value="PrestamoPignoraticio" @if ($tipoprestamo->nombre=='PrestamoPignoraticio') selected @endif>Prestamo Pignoraticio</option>
                            </select>
                             @error('')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                      



                  <div class="mb-4">
                           <label for="descripcion" class="form-label">Descripción</label>
                          <input class="form-control @error('descripcion') is-invalid @enderror" type="text" name="descripcion"
                           id="descripcion" placeholder="Ingrese una descripcion"  value="{{$tipoprestamo->descripcion }}">
                          
                            @error('')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                  </div>


                  <div class="mb-3">
                            <label for="interes" class="form-label">Intereses</label>
                            <select class="form-select"  name="interes" id="interes">
                                <option value="0.15"  @if ($tipoprestamo->interes=='0.15') selected @endif>15% – 30% anual</option>
                                <option value="0.08"  @if ($tipoprestamo->interes=='0.08') selected @endif> 8% – 15% anual</option>
                                <option value="0.10"  @if ($tipoprestamo->interes=='0.10') selected @endif>10% – 20% anual</option>
                                <option value="0.05"  @if ($tipoprestamo->interes=='0.05') selected @endif>5% – 12% anual</option>
                                <option value="0.12"  @if ($tipoprestamo->interes=='0.12') selected @endif>12% – 25% anual</option>
                                <option value="0.18"  @if ($tipoprestamo->interes=='0.18') selected @endif>18% – 28% anual</option>
                                <option value="0.12"  @if ($tipoprestamo->interes=='0.12') selected @endif>12% – 22% anual</option>
                                <option value="0.20"  @if ($tipoprestamo->interes=='0.20') selected @endif>20% – 35% anual</option>
                           
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