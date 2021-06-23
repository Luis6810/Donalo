@extends('layouts.app')

@section('content')
<section class="group group--color mb-2">
    <div class="contra">
      <h2 class="main__title">Realizar donativo</h2> <!--Primer titulo -->
    </div>
</section>
<form method="POST" action=" {{route('registrarDonacion')}} " enctype="multipart/form-data">
    @csrf
<div class="content">
<h2 class="main__title">Información del donante:</h2>
{{-- <input type="hidden" name="id" value=" {{$product->id}} " >                 --}}
<input type="text" name="ManName" placeholder="Nombre" class="input-48">
<input type="text" name="apellidos" placeholder="Apellidos" class="input-48">
<input type="text" name="edad" placeholder="Edad" class="input-48">
<input type="text" name="email" placeholder="Correo electrónico" class="input-48">
<input type="text" name="Teléfonoo" placeholder="Teléfono" class="input-48">
<input type="text" name="name" placeholder="Nombre del producto" class="input-48">
<input type="file" name="image" placeholder="Imagen" class="input-48">
<input type="text" name="description" placeholder="Caracteristicas del producto" class="input-48">
<input type="text" name="text" placeholder="Categoría del producto" class="input-48">
<select name="category_id" id="cars" multiple>
    @foreach ($categories as $categorie)
    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
    @endforeach
    
  </select>
<button class="button" type="submit" >Enviar</button>
</div>
</form>

@endsection