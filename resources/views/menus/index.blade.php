@extends('home')
@section('title','Menús')
    


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
                @foreach ($menus as $menu)
                 
                <div class="card" style="width: 16rem;">
                    <img src="{{Storage::url($menu->imagen)}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <p class="card-text">{{$menu->descripcion}}</p>
                      <p class="card-text">Precio ${{$menu->precio}}</p>
                    </div>
                  </div>
                @endforeach
                <span>
                {{$menus->links()}}
                </span>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
