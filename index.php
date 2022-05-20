<?php

  session_start();
  if(isset($_SESSION['nombre'])) {
    header("location: home.php");
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap CSS -->
  <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

  <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
  <!-- https://cdnjs.com/libraries/font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />


  <!-- Mis estilos -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <!-- iniciar Sesion -->
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Iniciar Sesión</h5>
      </div>
      <div class="card-body">
        <form class="row g-3" action="login.php" method="post">
          <div class="col-md-12">
            <input type="text" placeholder="Correo" name="correo" required>
          </div>
          <div class="col-md-12">
            <input type="password" placeholder="Contraseña"name="contra" required>
          </div>    
          <div class="col-12">
            <button type="submit" value="Ingresar" class="btn btn-primary">Ingresar</button>
          </div>
          <hr>
          <div class="col-12">
          <button onclick="" class="btn btn-success">Crear cuenta nueva</button>
          </div>
        </form>      
      </div>
    </div>

    <!-- Registrarse -->
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Registrarse</h5>
      </div>
      <div class="card-body">
        <form class="row g-3" action="register.php" method="post">
          <div class="col-12">
            <input type="text" placeholder="Nombre" name="nombre" required>
          </div>
          <div class="col-12">
            <input type="text" placeholder="RFC" name="rfc" required>
          </div>
          <div class="col-12">
            <input type="text" placeholder="Correo" name="Correo" required>
          </div>
          <div class="col-12">
            <input type="password" placeholder="Contraseña" name="contra" required>
          </div>
          <div class="col-12">
            <button type="submit" value="Registrarte" class="btn btn-success">Registrar</button>
          </div>
          <div class="col-12">
            <a href="#">¿Ya tienes una cuenta?</a>
          </div>
        </form>      
      </div>
    </div>     
  </div>


  <!-- <form action="login.php" method="post">
    <h1>Iniciar Sesion</h1>
    <p>Correo <input type="text" placeholder="ingrese su correo" name="correo"></p>
    <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contra"></p>
    <input type="submit" value="Ingresar">
  </form>

  <form action="register.php" method="post">
    <h1>Registrarse</h1>
    <p>Nombre <input type="text" placeholder="ingrese su nombre" name="nombre"></p>
    <p>RFC <input type="text" placeholder="ingrese su RFC" name="rfc"></p>
    <p>Correo <input type="text" placeholder="ingrese su correo" name="correo"></p>
    <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contrasena"></p>
    <input type="submit" value="Ingresar">
  </form> -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>

</html>