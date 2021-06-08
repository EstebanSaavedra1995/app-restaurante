@extends('layouts.app')


@section('title', 'Home')
@section('left-menu')

    <li class="nav-item"><a class="nav-link {{request()->routeIs('reservas.create')? 'active': ''}}" 
    href="{{ route('reservas.create') }}">Solicitar una reserva</a> </li>
    <li class="nav-item"><a class="nav-link {{request()->routeIs('menus.index')? 'active': ''}}" 
    href="{{ route('menus.index') }}">Ver los menús</a></li>
    <li class="nav-item"><a class="nav-link {{request()->routeIs('reservas.index')? 'active': ''}}" 
        href="{{ route('reservas.index') }}">Ver reservas realizadas</a></li>
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Mostrar si tiene una reserva activa
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
