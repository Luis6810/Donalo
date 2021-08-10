<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    {{-- <link rel="stylesheet" href="css/estilosplatillos.css">  --}}

    <!-- RECAPTCHAAA -->
    
    {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
</head>
<body ng-controller="testCtrl">

    <div id="app">
        {{-- <header>
            <section class="cabecera">
                <div class="contenedor">
                    <a href="#imagen1">
                   
                    <img src=" {{asset('img/ICONO.png')}} " alt="" class="logotipo">
                    </a> 
                    <a href="#" class="button">Menú</a>
                    <a href="#" class="button">Ubicación</a>
                </div>
            </section>        
        </header>  --}}


        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: var(--primary-color) ; important;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/logo.png')}}" width="90" height="80" alt="" loading="lazy">
                  </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    ¡Dónalo!
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link button" href=" {{route('descubre')}} ">Descubre</a>
                          </li>

                          
                          <li class="nav-item dropdown">
                            <a class="nav-link button dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Categorías
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href=" {{route('categorie','Alimentos enlatados')}} ">Alimentos enlatados</a>
                              <a class="dropdown-item" href=" {{route('categorie','Ropa y calzado')}}">Ropa y calzado</a>
                              <a class="dropdown-item" href="{{route('categorie','Cobijas')}}">Cobijas</a>
                              <a class="dropdown-item" href="{{route('categorie','Muebles')}}">Muebles</a>
                              <a class="dropdown-item" href="{{route('categorie','Electrodomésticos')}}">Electrodomésticos</a>
                              <a class="dropdown-item" href="{{route('categorie','Higiene')}}">Higiene</a>
                              <a class="dropdown-item" href="{{route('categorie','Juguetes')}}">Juguetes</a>
                              <a class="dropdown-item" href={{route('categorie','Medicamentos')}}>Medicamentos</a>
                              <a class="dropdown-item" href="{{route('categorie','Otros')}}">Otros</a>
                            </div>
                          </li>
                          
                          <li class="nav-item active">
                            <a class="nav-link button" href=" {{route('donar')}} ">¡Dona!</a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link button" href=" {{route('ubicacion')}} ">Ubicación</a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link button" href=" {{route('galeria')}} ">Galería</a>
                          </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
       
        <main class="">
            @if (\Session::has('success'))
            <div class="alert alert-success">
                   {!! \Session::get('success') !!}
            </div>
        @endif
            @yield('content')
        </main>
    </div>

     <!-- Footer -->
     <footer class="page-footer footer font-small bg-dark pt-4 mt-0 text-white">
            
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            
            <!-- Grid row -->
            <div class="row">
                
                <!-- Grid column -->
                <div class="col-md-4 mt-md-0 mt-3">
                    
                    <!-- Content -->
                    <h4 class="">Encuéntranos</h4>
                    
                    <p>Avenida Heroico Colegio Militar 500, Valle de Santiago, Guanajuato, México C.P. 38400 <span class="fas fa-map-marker-alt">
                        
                    </span></p>
                    
                    <p>Tel. 01 (456)138 54 12<span class="fa fa-phone">
                        
                    </span></p>
                    
                    
                    
                    
                </div>

                <div class="col-md-2">
                      <ul class="navbar-nav ml-auto">
                    <div class="flex-center position-ref full-height text-success">
                       
                </ul>
                </div>
                <!-- Grid column -->
                
                <hr class="clearfix w-100 d-md-none pb-3">
                
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    
                    <!-- Links -->
                    <div class="footer-columna">
                        <h4>Categorías</h4>
                        <a href=" ">Alimentos enlatados</a>
                        <br>
                        <a href="  ">Ropa y Calzado</a>
                        <br>
                        <a href=" ">Cobijas</a>
                        <br>
                        <a href="">Muebles</a>
                      <br>
                       <a href="  ">Electrodomésticos</a>
                        <br>
                       <a href="  ">Higiene</a>
                        <br>
                       <a href="  ">Juguetes</a>
                        <br>
                       <a href="  ">Medicamentos</a>
                        <br>
                       <a href="  ">Otros</a>
                        <br>
                        
                    </div>
                    
                    
                </div>
                <!-- Grid column -->
                
                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">
                    
                    <!-- Links -->
                    <div class="footer-columna">
                        
                        <h4>Almacén</h4>
                        <a
                            href=" {{route('menu')}} ">Menú</a>
                        <br>
                        <br>
                        
                    </div>
                    
                </div>
                <!-- Grid column -->
                
            </div>
            <!-- Grid row -->
            
        </div>
        <!-- Footer Links -->
        
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">&copy; 2020, Todos los derechos reservados | <a href="#" style="color: white;">
            <a href="#">¡Dónalo!</a>
        </div>
        <!-- Copyright -->
        
    </footer>
</body>
</html>
