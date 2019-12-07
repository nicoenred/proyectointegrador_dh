<?php
$ok=false;
$nombre = "";
$email = "";
$username = "";
$ciudad = "";
$provincia = "";
if ($_POST) {

  $usuario = [
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "username" =>$_POST["username"],
    "ciudad"=>$_POST["ciudad"],
    "provincia"=>$_POST["provincia"],
    "password" => password_hash($_POST["password"],PASSWORD_DEFAULT),
  ];

    $userjson=file_get_contents("manejo1.txt");
    $users=json_decode($userjson,true);


      $aux=filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
      if((strlen($_POST["name"]) == 0)&&(!($aux))&&(strlen($_POST["username"]) == 0)&&(strlen($_POST["ciudad"]) == 0)&&(strlen($_POST["provincia"]) == 0)){
        echo "Por favor escribe tu nombre <br>";
        echo "Por favor ingresa un mail <br>";
        echo "Por favor ingresa un username <br>";
        echo "Por favor ingresa una ciudad <br>";
        echo "Por favor ingresa una provincia <br>";
      }else{
        if((strlen($_POST["name"]) == 0)||(!($aux))||(strlen($_POST["username"]) == 0)||(strlen($_POST["ciudad"]) == 0)||(strlen($_POST["provincia"]) == 0)){
          if((strlen($_POST["name"])) == 0) {
          echo "Por favor escribe tu nombre <br>";
          }
        if (!$aux){
           echo "Por favor ingresa un mail <br>";
         }
         if((strlen($_POST["username"])) == 0) {
         echo "Por favor escribe tu username <br>";
         }
         if((strlen($_POST["ciudad"])) == 0) {
         echo "Por favor escribe tu ciudad <br>";
         }
         if((strlen($_POST["provincia"])) == 0) {
         echo "Por favor escribe tu provincia <br>";
         }
       }else{
         $nombre= $_POST["name"];
         $email= $_POST["email"];
         $username = $_POST["username"];
         $ciudad = $_POST["ciudad"];
         $provincia = $_POST["provincia"];

    }


    if (isset($_POST["email"])) {

/*
  Pregunto si el array tiene elementos.
  Si tiene elementos recorro el array y comparo el email del elemento con el mail solicitado en el form.
  Si lo encuentro, hago un break para que no siga buscando.
  sino inserto el usuario.
*/
      if(count($users["usuarios"]) > 0 ){
        foreach ($users["usuarios"] as $valor) {

            if (($_POST["email"]==$valor["email"])&&($_POST["username"]==$valor["username"])) {
              echo "Email ya utilizado <br> ";
              echo "Usuario ya utilizado <br> " ;
              break;} else {
                if (($_POST["email"]==$valor["email"])||($_POST["username"]==$valor["username"])) {
                  if ($_POST["email"]==$valor["email"]) {
                    echo "Email ya utilizado <br> ";
                  }
                  if($_POST["username"]==$valor["username"]) {
                    echo "Usuario ya utilizado <br> ";
                  }

            }else{
              $users["usuarios"][]=$usuario;
              file_put_contents("manejo1.txt",json_encode($users));
            }
          }}
      }else{
        $users["usuarios"][]=$usuario;
        file_put_contents("manejo1.txt",json_encode($users));
      }


    }



    }   }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php include_once "estilo.php" ?>

  <title>| REGISTRO |</title>
</head>
<body>

  <?php include_once "header.php" ?>



  <section class="container" id="form-registro">

    <p class="h2 text-center text-uppercase"><strong>registrate</strong></p>

<section>

      <div class="container">


        <div class='row' id="rowregis">
                  <form id='register' class="registros" action='' method='post'>
                    <div class="col-xs-5" class='container'>
                        <label for='name' >Nombre completo: </label><br/>
                        <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                        <span id='register_name_errorloc' class='error'></span>
                    </div>
                    <div class="col-xs-5" class='container'>
                        <label for='email' >Email:</label><br/>
                        <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                        <span id='register_email_errorloc' class='error'></span>
                    </div>
                    <div class="col-xs-5" class='container'>
                        <label for='username' >Nombre de usuario*:</label><br/>
                        <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                        <span id='register_username_errorloc' class='error'></span>
                    </div>
                    <div class="col-xs-5" class='container' >
                        <label for='password' >Contraseña*:</label><br/>
                        <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                        <input type='password' name='password' id='password' maxlength="50" />
                        <div id='register_password_errorloc' class='error' style='clear:both'></div>
                    </div>

                      <div class="col-xs-5">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name='ciudad' class="form-control" id="ciudad" placeholder="ciudad">
                      </div>

                      <div class="col-xs-5">
                     <label  for="provincia">Provincia</label>
                     <select name="provincia" id="provincia" class="form-control">
                       <option selected>Provincia...</option>
                       <option>Buenos Aires</option>
                       <option>Río Negro</option>
                       <option>Tierra del Fuego</option>
                       <option>Santa Cruz</option>
                       <option>Chubut</option>
                       <option>Neuquén</option>
                       <option>La Pampa</option>
                       <option>Mendoza</option>
                       <option>Santa Fé</option>
                       <option>San Juan</option>
                       <option>Corrientes</option>
                       <option>Chaco</option>
                       <option>Entre Rios</option>
                       <option>Córdoba</option>
                       <option>Santiago del Estero</option>
                       <option>Formosa</option>
                       <option>Jujuy</option>
                       <option>Salta</option>
                       <option>Tucumán</option>
                       <option>Catamarca</option>
                       <option>La Rioja</option>
                       <option>Misiones</option>
                       <option>San Luis</option>

                     </select>
                    </div>
                    <br/>
                    <div class='container'>
                      <input type='submit' name='Submit' value='Enviar' />
                    </div>
                  </form>

        </div>
        </div>
      </section>

    <!--<section>
    <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required>
            <div class="valid-feedback">
              Looks good!
            </div>

          </div>
          <div class="col-md-4 mb-3">
            <label for="username">Nombre de usuario</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
              </div>
              <input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor, elija un nombre de usuario.
              </div>
            </div>
          </div>
        </div>
        <!--
        <div class="form-row">

        <div class="col-md-6 mb-3">
        <label for="validationCustom03">City</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
        <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
    <label for="validationCustom04">State</label>
    <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
    <div class="invalid-feedback">
    Please provide a valid state.
  </div>
  </div>
  <div class="col-md-3 mb-3">
  <label for="validationCustom05">Zip</label>
  <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
  <div class="invalid-feedback">
  Please provide a valid zip.
  </div>
  </div>

  </div>

  <div class="form-group">
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
  <label class="form-check-label" for="invalidCheck">
  Agree to terms and conditions
  </label>
  <div class="invalid-feedback">
  You must agree before submitting.
  </div>
  </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
  -->
    <!--</form>-->

<!--    <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
    </script>
    </section>

    <section >
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Correo electrónico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="abc123@gmail.com">
        </div>
        <div class="form-group col-md-6">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña">
        </div>-->





      <!--
      <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
  -->
    <!--  <div class="form-row">
      <div class="form-group col-md-6">
        <label for="ciudad">Ciudad de Origen</label>
        <input type="text" name="ciudad" class="form-control" id="ciudad" placeholder="Ciudad">
      </div>
      <div class="form-group col-md-4">
        <label  for="provincia">Provincia</label>
        <select name="provincia" id="provincia" class="form-control">
          <option selected>Provincia...</option>
          <option>Buenos Aires</option>
          <option>Río Negro</option>
          <option>Tierra del Fuego</option>
          <option>Santa Cruz</option>
          <option>Chubut</option>
          <option>Neuquén</option>
          <option>La Pampa</option>
          <option>Mendoza</option>
          <option>Santa Fé</option>
          <option>San Juan</option>
          <option>Corrientes</option>
          <option>Chaco</option>
          <option>Entre Rios</option>
          <option>Córdoba</option>
          <option>Santiago del Estero</option>
          <option>Formosa</option>
          <option>Jujuy</option>
          <option>Salta</option>
          <option>Tucumán</option>
          <option>Catamarca</option>
          <option>La Rioja</option>
          <option>Misiones</option>
          <option>San Luis</option>

        </select>-->
          <!--
    <div class="form-group">
    <div class="form-check">
    <input class="form-check-input" type="checkbox" id="gridCheck">
    <label class="form-check-label" for="gridCheck">
    Check me out
    </label>
    </div>
    </div>
    -->
    <!--  <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
    </section>
  </section>-->

<?php include_once "footer.php" ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
