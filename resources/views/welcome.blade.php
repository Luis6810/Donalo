@extends('layouts.app')

@section('content')
    
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">¡Dónalo!</h1>
              <p class="lead"> ¿Tienes cosas viejas en tu casa, pero aún funcionan? No las tires, ¡dónalas!</p>
            </div>
        </div>

        <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="card mb-3 border-dark" style="">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="{{$randomElement->image}}" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$randomElement->name}}</h5>
                          <p class="card-text">{{$randomElement->description}}</p>
                          <p class="main__txt">Disponible: {{$randomElement->stock}}</p>
                            
                                <a href=" {{route('comprar',$randomElement->id)}} " class="btn btn-success">Adquirir</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <h1 class="display-5">Categorías</h1>
                @foreach ($categories as $categorie)
                <a class="btn btn-block btn-primary btn-lg" href=" {{route('categorie',$categorie->name)}} "> {{$categorie->name}} </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
