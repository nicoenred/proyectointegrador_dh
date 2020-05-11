@extends('layouts.app')

@section('titulo')
about
@endsection


@section('content')

  <div class="jumbotron m-0">
    <h1 class="display-4"><img src="/imagenes/marca/logo.png" alt="entre_diagonales">entre <strong>Diagonales</strong> /</a> </h1>
    <p class="lead">Conocé nuestra gran variedad de alternativas a la hora de <strong>recorrer y conocer la ciudad de La Plata</strong>, con el confort de nuestros transportes y el conocimiento de nuestro personal logramos que tu recorrido sea una experiencia beneficiosa y placentera</p>
    <hr class="my-4">
    <ul class="list-inline">
      <li class="list-inline-item"><ion-icon size="large" name="logo-facebook"></ion-icon></li>
      <li class="list-inline-item"><ion-icon  size="large" name="logo-twitter"></ion-icon></li>
      <li class="list-inline-item"><ion-icon  size="large" name="logo-youtube"></ion-icon></ion-icon></li>

    </ul>
    <a class="btn btn-primary" href="{{ Route('contact') }}" role="button">Escribinos </a>
    <a href="/faq" role="button" class="btn btn-dark">Preguntas Frecuentes</a>
  </div>
@endsection
