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
                        
                        <form method="POST" action='{{ route('reservas.store')}}' class="row g-3 needs-validation">
                          @csrf
                            <div class="col-md-4">
                              {{-- "AAAA-MM-DD" --}}
                              <label for="validationCustom01" class="form-label" >Fecha</label>
                              <input type="date" min="{{$today}}" max="{{$tomorrow}}"  class="form-control" name="fecha"  required>
                            </div>
                            
                            <div class="col-12">
                              <button  class="btn btn-primary" type="submit">Solicitar</button>
                            </div>
                            
                          </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
