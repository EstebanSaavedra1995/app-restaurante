@extends('home')
@section('title', 'Menús')
@section('subtitle', 'Lista de menus')
@section('search')
<input class="float-right" type="text" placeholder="Buscar">    
@endsection
@section('contenido')

  
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($menus as $menu)
        <div class="col">
          <div class="card">
            <img src="{{ Storage::url($menu->imagen) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $menu->tipo }}</h5>
              <p class="card-text">{{ $menu->descripcion }}</p>
              <p class="card-text"><small class="text-muted">${{ $menu->precio }}</small></p>
            </div>
          </div>
        </div>  
        @endforeach
      </div>
      <span>
        {{ $menus->links() }}
    </span>

@endsection
