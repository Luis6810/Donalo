@extends('layouts.app')

@section('content')
<section class="group group--color mb-2">
    <div class="contra">
      <h2 class="main__title">Confirmar recepción de donativos</h2> <!--Primer titulo -->
    </div>
</section>
<div class="container">
    <h2>Información de la orden</h2>

        <div class="conte">
            <div class="row">
                <div class="col-md-6">
                    <h4>Nombre del producto:</h4>
                    <h5>{{$product->name}}</h5>
                    <img class="img-fluid" src=" {{$product->image }} " alt="">
                </div>
                <div class="col-md-6">
                    <h4>Descripción:</h4>
            <h5>{{$product->description}}</h5> 
            <h4>Categoría:</h4>
            <h5>{{$product->categorie_name}}</h5>

                </div>
            </div>
        
            
        </div>  
         
            <form method="POST" action=" {{route('buy')}} ">
                @csrf
            <div class="content">
            <h2 class="main__title">Información del usuario:</h2>
            <span class="linea"></span> <!--línea de divición -->
            <input type="hidden" name="id" value=" {{$product->id}} " >                
            <input type="text" name="municipio" placeholder="Municipio" class="input-48">
            <input type="text" name="Colonia" placeholder="Colonia" class="input-48">
            <input type="text" name="Calle" placeholder="Calle" class="input-48">
            <input type="text" name="No" placeholder="No" class="input-48">
            <input type="text" name="Entre calles" placeholder="Entre calles" class="input-48">
            <input type="text" name="Código postal" placeholder="Código postal" class="input-48">
            <input type="text" name="Teléfonoo" placeholder="Teléfono" class="input-48">
            <input type="text" name="Recibe" placeholder="Recibe" class="input-48">
            <input type="text" name="Referencias" placeholder="Referencias" class="input-48">
            <button class="button" type="submit" >Enviar</button>
        </div>
            </form>

</div>


@endsection