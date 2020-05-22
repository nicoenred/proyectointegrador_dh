@extends('layouts.app')

@section('titulo')
Editar Perfil
@endsection

@section('content')

  <form method="post" enctype="multipart/form-data" class="formedit" action="/updateInfo/{{$user->idUser}}">
      <input type="hidden" name="_method" value="PUT">
      {{ csrf_field() }}

      <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

          <div class="col-md-6">
              <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $user->surname }}" required autocomplete="surname" autofocus>

              @error('surname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>

          <div class="col-md-6">
              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>

              @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

          <div class="col-md-6">
              <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ $user->telephone }}" required autocomplete="telephone" autofocus>

              @error('telephone')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

          <div class="col-md-6">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

          <div class="col-md-6">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Repetir contraseña') }}</label>

          <div class="col-md-6">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>
      </div>

      <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              <button type="submit" onlick = 'enviar()' class="btn btn-primary">
                  {{ __('Actualizar') }}
              </button>
          </div>
      </div>
  </form>

  <script >

window.onload = function (){
  /* Validación del formulario a través de JavaScript */

    let form = document.querySelector('.formedit');
    let regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    let regexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    let errores = [0,0,0,0,0,0,0,0,0];
    let camposformulario = ["byAgustín","Fernández","Nombre","Apellido","Nombre de usuario","Teléfono","Email","Contraseña","Repetir contraseña"];
    console.log(camposformulario);
    console.log(form.elements);

   form.addEventListener("change",function(){
    /* Validacion campo nombre */
    this.elements[2].onblur = function(){
      if(this.value.trim() == ""){
        alert('El campo ' + camposformulario[2] + ' no puede estar vacío!');
        errores[2] = 1;
        console.log(errores);
        return false;
      }
      else if (this.value.length<3){
        alert('El campo ' + camposformulario[2] + ' debe tener más de dos letras!');
        errores[2] = 1;
        return false;
      }
    }
    /* Validacion campo apellido */
    this.elements[3].onblur = function(){
      if(this.value.trim() == ""){
        alert('El campo ' + camposformulario[3] + ' no puede estar vacío!');
        errores[3] = 1;
        return false;
      }
      else if (this.value.length<3){
        alert('El campo ' + camposformulario[3] + ' debe tener más de dos letras!');
        errores[3] = 1;
        return false;
      }
    }
    /* Validacion campo Apodo */
    this.elements[4].onblur = function(){
      if(this.value.trim() == ""){
        alert('El campo ' + camposformulario[4] + ' no puede estar vacío!');
        errores[4] = 1;
        return false;
      }
      else if (this.value.length<3){
        alert('El campo ' + camposformulario[4] + ' debe tener más de dos letras!');
        errores[4] = 1;
        return false;
      }
    }
    /* Validacion campo teléfono */
    this.elements[5].onblur = function(){
      if(this.value.trim() == ""){
        alert('El campo ' + camposformulario[5] + ' no puede estar vacío!');
        errores[5] = 1;
        return false;
      }
      else if (this.value<3){
        alert('El campo ' + camposformulario[5] + ' debe tener más de dos digitos!');
        errores[5] = 1;
        return false;
      }
      if (!regexPhone.test(this.value)){
        errores[5] = 1;
        alert('El campo ' + camposformulario[5] + ' no tiene un formato válido, ingrese sólo numeros entre 10 y 12 dígitos y sin espacios');
        return false;
      }
    }
    /* Validacion campo email */
    this.elements[6].onblur = function(){
      if(this.value.trim() == ""){
        errores[6] = 1;
        alert('El campo ' + camposformulario[6] + ' no puede estar vacío!');
        return false;
      }
      if (!regexMail.test(this.value)){
        errores[6] = 1;
        alert('El campo ' + camposformulario[6] + ' no tiene un formato de email válido, ingrese por ejemplo usuario@gmail.com');
        return false;
      }
    }
    /* Validacion campos contraseñas */
    this.elements[7].onchange = function(){
      if(this.value.trim() == ""){
        errores[7] = 1;
        alert('El campo ' + camposformulario[7] + ' no puede estar vacío!');
        return 0;
      }
      if (this.value != form.elements[8].value){
        errores[7] = 1;
        alert('El campo ' + camposformulario[7] + ' no coincide con ' + camposformulario[8] + ' ingrese las mismas contraseñas');
        return 0;
      }
    }
    this.elements[8].onchange = function(){
      if(this.value.trim() == ""){
        errores[8] = 1;
        alert('El campo ' + camposformulario[8] + ' no puede estar vacío!');
        return 0;
      }
      if (this.value != form.elements[7].value){
        errores[8] = 1;
        alert('El campo ' + camposformulario[8] + ' no coincide con ' + camposformulario[7] + ' ingrese las mismas contraseñas');
        return 0;
      }
    }
    /* Validacion del envio del formulario */
    this.onsubmit = function (event){
    console.log(errores.indexOf(1));
      if(errores.indexOf(1) != -1){
            var indice = errores.indexOf(1);
            console.log(errores);
            event.preventDefault();
            alert('Complete el campo ' + camposformulario[indice] + ' correctamente e intente nuevamente');
            errores[indice] = 0;
            return false;
    }
    }
  })
}
  /*
  form.elements[2].onchange = function(){
    console.log('editaste el campo name');
  }
  let valorcamponombre = form.elements[3].value;
  form.elements[2].onfocus = function(){
    console.log('hiciste focus en el campo nombre');
  }


    let campos = Array.from(form.elements);

    campos.pop();
    console.log(campos);

    /*

    Intento de fetch...

    // Cabecera CSRF para que Laravel reciba el $requesta y guarde al usuario
    let header = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    form.addEventListener('submit',function(event){
      event.preventDefault();
      let datosDelFormulario = new FormData();
      campos.foreach(function(elemento){
          datosDelFormulario.append(elemento.name,elemento.value);
      })

      window.fetch('http://localhost:8080//updateInfo/{{$user->idUser}}', {
          method: 'POST',
          body: datosDelFormulario,
          headers: {'X-CSRF-TOKEN': header}
      })
      .then(function (response){
        return response.text();
      })
    })

    */
  </script>

@endsection
