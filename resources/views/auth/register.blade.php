@extends('layouts.app')

@section('titulo')
    Registrate
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>



                <div class="card-body">
                    <form method="POST" class="formedit" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

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
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

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
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarme') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

window.onload = function (){
/* Validación del formulario a través de JavaScript */

  let form = document.querySelector('.formedit');
  let regexMail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  let regexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
  let errores = [0,0,0,0,0,0,0,0,0];
  let camposformulario = ["Fernández","Nombre","Apellido","Nombre de usuario","Teléfono","Email","Contraseña","Repetir contraseña"];
  console.log(camposformulario);
  console.log(form.elements);

 form.addEventListener("change",function(){
  /* Validacion campo nombre */
  this.elements[1].onblur = function(){
    if(this.value.trim() == ""){
      alert('El campo ' + camposformulario[1] + ' no puede estar vacío!');
      errores[1] = 1;
      console.log(errores);
      return false;
    }
    else if (this.value.length<3){
      alert('El campo ' + camposformulario[1] + ' debe tener más de dos letras!');
      errores[1] = 1;
      return false;
    }
  }
  /* Validacion campo apellido */
  this.elements[2].onblur = function(){
    if(this.value.trim() == ""){
      alert('El campo ' + camposformulario[2] + ' no puede estar vacío!');
      errores[2] = 1;
      return false;
    }
    else if (this.value.length<3){
      alert('El campo ' + camposformulario[2] + ' debe tener más de dos letras!');
      errores[2] = 1;
      return false;
    }
  }
  /* Validacion campo Apodo */
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
  /* Validacion campo teléfono */
  this.elements[4].onblur = function(){
    if(this.value.trim() == ""){
      alert('El campo ' + camposformulario[4] + ' no puede estar vacío!');
      errores[4] = 1;
      return false;
    }
    else if (this.value<3){
      alert('El campo ' + camposformulario[4] + ' debe tener más de dos digitos!');
      errores[4] = 1;
      return false;
    }
    if (!regexPhone.test(this.value)){
      errores[4] = 1;
      alert('El campo ' + camposformulario[4] + ' no tiene un formato válido, ingrese sólo numeros entre 10 y 12 dígitos y sin espacios');
      return false;
    }
  }
  /* Validacion campo email */
  this.elements[5].onblur = function(){
    if(this.value.trim() == ""){
      errores[5] = 1;
      alert('El campo ' + camposformulario[5] + ' no puede estar vacío!');
      return false;
    }
    if (!regexMail.test(this.value)){
      errores[5] = 1;
      alert('El campo ' + camposformulario[5] + ' no tiene un formato de email válido, ingrese por ejemplo usuario@gmail.com');
      return false;
    }
  }
  /* Validacion campos contraseñas */
  this.elements[6].onchange = function(){
    if(this.value.trim() == ""){
      errores[6] = 1;
      alert('El campo ' + camposformulario[6] + ' no puede estar vacío!');
      return 0;
    }
    if (this.value != form.elements[7].value){
      errores[6] = 1;
      alert('El campo ' + camposformulario[6] + ' no coincide con ' + camposformulario[7] + ' ingrese las mismas contraseñas');
      return 0;
    }
  }
  this.elements[7].onchange = function(){
    if(this.value.trim() == ""){
      errores[7] = 1;
      alert('El campo ' + camposformulario[7] + ' no puede estar vacío!');
      return 0;
    }
    if (this.value != form.elements[6].value){
      errores[7] = 1;
      alert('El campo ' + camposformulario[7] + ' no coincide con ' + camposformulario[6] + ' ingrese las mismas contraseñas');
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
</script>
@endsection
