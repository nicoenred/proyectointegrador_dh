<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <!-- Token necesario para poder enviar data mediante fetch -->
  <meta name="csrf-token" content="{{ csrf_token() }}"

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('titulo')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

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
              <a class="nav-link" href="{{ Route('home') }}"> Inicio <svg class="bi bi-house-fill" width="1em" height="1em" viewBox="1 1 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 01-1.5 1.5h-9A1.5 1.5 0 012 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 011.414 0l6.647 6.646a.5.5 0 01-.708.708L8 2.207 1.354 8.854a.5.5 0 11-.708-.708L7.293 1.5z" clip-rule="evenodd"/>
</svg> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/directorio">Excursiones <svg class="bi bi-image-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.002 3a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2h-12a2 2 0 01-2-2V3zm1 9l2.646-2.354a.5.5 0 01.63-.062l2.66 1.773 3.71-3.71a.5.5 0 01.577-.094L15.002 9.5V13a1 1 0 01-1 1h-12a1 1 0 01-1-1v-1zm5-6.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" clip-rule="evenodd"/>
</svg> </a>
            </li>
            <li  class="nav-item">
              <a class="nav-link" href="/about"> Sobre Nosotros <svg class="bi bi-info-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 16A8 8 0 108 0a8 8 0 000 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
</svg></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ Route('contact') }}"> Contacto <svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M.05 3.555L8 8.414l7.95-4.859A2 2 0 0014 2H2A2 2 0 00.05 3.555zM16 4.697l-5.875 3.59L16 11.743V4.697zm-.168 8.108L9.157 8.879 8 9.586l-1.157-.707-6.675 3.926A2 2 0 002 14h12a2 2 0 001.832-1.195zM0 11.743l5.875-3.456L0 4.697v7.046z"/>
</svg> </a>
            </li>
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <svg class="bi bi-person-fill" width="1.1em" height="1.1em" viewBox="1 1 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
</svg></a>
              </li>
              @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} <svg class="bi bi-person-lines-fill" width="1.1em" height="1.1em" viewBox="1 1 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm7 1.5a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5zm-2-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm0-3a.5.5 0 01.5-.5h4a.5.5 0 010 1h-4a.5.5 0 01-.5-.5zm2 9a.5.5 0 01.5-.5h2a.5.5 0 010 1h-2a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
</svg> </a>
                </li>
              @endif
            @else
              <li class="nav-item">
                <a class="nav-link" href="/carrito"> Carrito <i class='fas fa-shopping-cart' style='font-size:12px'></i> </a>
              </li>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"><svg class="bi bi-person-check-fill" width="1.1em" height="1.1em" viewBox="1 1 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 100-6 3 3 0 000 6zm9.854-2.854a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0l-1.5-1.5a.5.5 0 01.708-.708L12.5 7.793l2.646-2.647a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                </svg></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/miPerfil/{{Auth::user()->idUser}}">
                    {{ __('Mi Perfil') }}
                  </a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
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
