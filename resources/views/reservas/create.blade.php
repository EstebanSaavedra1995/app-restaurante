@extends('home')
@section('title', 'Nueva Reserva')
@section('subtitle', 'Reservas')
@section('contenido')


    <div>
        <form id="form" method="POST" action="{{ route('reservas.store') }}">
            @csrf
            <div class="mb-3">
                <label for="personas" class="form-label">Seleccione la cantidad de personas</label>
                <select class="form-control" id="personas" name="personas">
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Seleccione la fecha</label>
                <input type="date" min="{{ $today }}" max="{{ $tomorrow }}" class="form-control" id="fecha"
                    name="fecha" required>
            </div>
            <div class="mb-3" id="contenedor">
                <label for="hora" class="form-label">Seleccione la hora</label>
                <select class="form-control" id="hora">
                    @foreach($horaActual as $hora)
                    <option> {{$hora}} </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary form-control">Solicitar</button>
        </form>
    </div>


@endsection
