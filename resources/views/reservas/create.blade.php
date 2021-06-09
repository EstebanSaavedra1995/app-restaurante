@extends('home')
@section('title','Nueva Reserva')
    


@section('content')


<div class="container">
  
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                        <form id="form" method="POST" action='{{ route('reservas.store')}}' class="row g-3 needs-validation">
                          @csrf
                          <div class="col-12">
                            <input  class="form-control" name="msj" value="msj desde formulario">
                          </div>
                            <div class="col-md-4">
                              {{-- "AAAA-MM-DD" --}}
                              <label for="validationCustom01" class="form-label">Fecha</label>
                              <input type="date" min="{{$today}}" max="{{$tomorrow}}"  
                              class="form-control" id="fecha" name="fecha"  required>
                            </div>

                            <div class="col-12">
                              <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccione hora</option>
                                
                                <option value="1"> </option>
                                <div id="contenedor">
                                </div>
                              </select>
                            </div>
                            
                            <div class="col-12">
                              <button  class="btn btn-primary" type="submit">Solicitar</button>
                            </div>

                          
                          </form>
                          <div id="contenedor">
                          </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- <script src="{{ asset('/js/ajax/reserva.js')}}" type="text/javascript"></script> --}}