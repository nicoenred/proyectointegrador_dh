<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('titulo')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700|Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Share:ital,wght@0,400;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="/css/stylesheet.css">
</head>
<body>

{{-- Header --}}
  <header id="app">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
          <img src="/imagenes/marca/logo.png" alt="entre diagonales" width="30" height="30" class="d-inline-block align-top">
          Entre Diagonales
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto barra">
            <!-- Authentication Links -->
            <li  class="nav-item">
              <a class="nav-link" href="{{ Route('home') }}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/directorio">Excursiones</a>
            </li>
            <li  class="nav-item">
              <a class="nav-link" href="/about">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ Route('contact') }}"> Contacto </a>
            </li>
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
              <li class="nav-item">
                <a class="nav-link" href="/carrito"> Carrito </a>
              </li>
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
                <a class="dropdown-item" href="/miPerfil/{{Auth::user()->idUser}}">
                  {{ __('Mi Perfil') }}
                </a>
                @if (Auth::user()->rol == 'admin')
                  <a class="dropdown-item" href="/admin/{{Auth::user()->idUser}}"> Configuracion </a>
                @endif
              </div>
            </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  </header>

{{-- Portada --}}
  <section class="container-fluid text-center p-3 m-0 oscurecer" id="home">
    <div class="row">
    <div class="col-12">
        <a href="home"><img src="/imagenes/marca/logo.png" alt="entre_diagonales"> </a>
    </div>
    <div id="titulo" class="col-12">
        <a  class="texto" href="home"><h1> entre <br> DIAGONALES </h1></a>
    </div>
    <div class="row p-0">
        <div class="col text-center">
        <a class="btn btn-dark btn-lg" href="/directorio" role="button">Conocé nuestros recorridos</a>
        </div>
    </div>

  </section>

{{-- Contenido --}}
  @yield('content')


</body>

{{-- Footer --}}
<footer class="footerstyle">

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <div class="m-0"><p class="h4 text-center text-uppercase m-3" id="footer_title"><strong>MAPA DEL SITIO</strong></p></div>
          <div class="navfoot barra">
              <ul>
                  <li><a href="/home" title="Página principal de entre Diagonales">Home </a></li>
                  <li><a href="/about" title="Conocenos">Sobre Nosotros </a></li>
                  <li><a href="/listaproductos.php" title="entre Diagonales - Nuestras excursiones">Excursiones </a></li>
                  <li><a href="/faq" title="¿Preguntas?">Preguntas frecuentes </a></li>
                  <li><a href="/contacto" title="Contactanos">Contacto </a></li>
                  <li><a href="/register" title="Registrate y enterate de las últimas novedades y promociones">Registrarse </a></li>
                  <li><a href="/login" title="Logueate">Login </a></li>
              </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <div class="m-0 "><p class="h4 text-center text-uppercase m-3" id="footer_title"><strong>SOCIAL MEDIA</strong></p></div>
          <div class="navfoot">
              <ul>
                  <li><a href="#" title="Facebook de entre Diagonales">Facebook </a></li>
                  <li><a href="#" title="Instagram de entre Diagonales">Instagram </a></li>
                  <li><a href="#" title="Twitter de entre Diagonales">Twitter </a></li>
              </ul>

          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
           <div class="m-0"><p class="h4 text-center text-uppercase m-3" id="footer_title"><strong> POLÍTICA DE USO</strong></p></div>
            <div class="navfoot">
                <ul>
                    <li><a href="#" title="Condiciones">Condiciones generales </a></li>
                    <li><a href="#" title="Aviso legal">Aviso legal </a></li>
                    <li><a href="#" title="Política de privacidad de entre Diagonales">Política de privacidad </a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>


    <div class="container">
      <p class="m-0 text-center">Copyright &copy; ENTRE DIAGONALES 2020 </p>
    </div>

    <!-- /.container -->
  </footer>

</html>
