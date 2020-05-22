@extends('layouts.app')

@section('titulo')
Carrito
@endsection


@section('content')

  @if (count($carro))

    <h2 class="text-center">Carrito</h2>
    <section class="container w-80" id="resumen_compra">

      <table class="table table-bordered">
        <thead>
          <tr class="bg-primary">
            <th scope="col">Excursion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor</th>
            <th scope="col">Sub total</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($carro as $item => $value)
            <tr>

              <td>
                <span>
                  {{$value['name']}}
                  <a href="{{ route('eliminarItem', $item   ) }}"> Eliminar</a>
                </span>
              </td>

              <td>{{$value['cantidad']}}</td>
              <td>{{$value['valor']}}</td>

              <td>{{$value['cantidad']*$value['valor']}}</td>
            </tr>
          @endforeach
          <tr>
            <th scope="row" colspan="3">Total </th>
            <td class="bg-info"><strong>${{$total}}</strong></td>
          </tr>
        </tbody>
      </table>

    </section>

    <section class="container" id="boton_comprar">

      <div class="row p-0">
        <div class="col text-center">
          <button type="button" class="btn btn-primary btn-lg text-center  center">
            Comprar
          </button>
        </div>
      </div>

    </section>

  @else

    <h2 class="text-center">Carrito</h2>

    <section class="container w-80" id="resumen_compra">
      <h2 class="text-center">El carrito está vacío</h2>
    </section>

    <section class="container" id="boton_comprar">
      <div class="row p-0">
        <div class="col text-center">
          <a href="/directorio">
            <button type="button" class="btn btn-primary btn-lg text-center  center">
              Regresar
            </button>
          </a>
        </div>
      </div>
    </section>

  @endif

@endsection
