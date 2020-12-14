@extends('layouts.app')

@section('content')

<!----------------------------------------HEADER----------------------------------------------->     



<body>
    <main class="main">
        <section class="group group--color mb-2">
            <div class="contra">
              <h2 class="main__title">
                  @if (isset($categorie))
                      {{ $products[1]->categorie_name }}
                  @else
                      Descubre
                  @endif 
            </h2> <!--Primer titulo -->
            </div>
        </section>
        
<!----------IMAGENES DE LOS PLATILLOS DE HOY-------------> 
    <section class="galeria">
        @foreach ($products as $product)
        <div class="card">
            <div class="card-body">
                <div class="conteiner_platillos">
                    {{-- <a href="{{route('platillo',$product->id)}}"> --}}
                      <img src="{{$product->image}} " alt="" class="card-img-top">
                    </a>    
                    <h5 class="card-title">Nombre:{{$product->name}}</h5>
                    <p class="">Descripción:{{$product->description}}</p>
                    
                    {{-- <div class="today-special__price">Precio: ${{$product->price}}</div> --}}
                    {{-- <a href="{{route('platillo',$product->id)}}" class="btn btn-block btn-primary">Detalles</a> --}}
                    {{-- <a href=" {{route('comprar',$product->id)}} " class="btn btn-block btn-secondary">Comprar</a> --}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Categoría:{{$product->categorie_name}}</li>
                  </ul>
                  <div class="card-body">
                    <a href="#" class="btn btn-primary">!Lo necesito!</a>
                  </div>
            </div>
            
        </div>
        
        @endforeach
        
        
    </section>  
    
    </main>
    {{ $products->links() }}  
</body>
</html>

@endsection