<?php

  session_start();
  if(isset($_SESSION['nombre'])) {
    header("location: home.php"); //debe ir a home
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="title">Document</title>

  <!-- Bootstrap CSS -->
  <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

  <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
  <!-- https://cdnjs.com/libraries/font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <!-- Mis estilos -->
  <link rel="stylesheet" href="log&sign/style_index.css">
</head>

<body>
  <div class="container">
    <!-- iniciar Sesion -->
    <div class="card" id="cardIngreso">
      <h5 class="card-title">Iniciar Sesión</h5>
      <div class="card-body">
        <form class="row g-3" action="log&sign/login.php" method="post">
          <input type="text" placeholder="Correo" name="correo" required>
          <input type="password" placeholder="Contraseña"name="contra" required>
          <button type="submit" value="Ingresar" class="btn btn-primary rounded-pill botons">Ingresar</button>
          <hr>
          <button onclick="registro()" type="button" class="btn btn-success btn-registro rounded-pill botons">Crear cuenta nueva</button>
        </form>      
      </div>
    </div>

    <!-- Registrarse -->
    <div class="card" id="cardRegistro">
      <h5 class="card-title">Registrarse</h5>
      <div class="card-body"> 
        <form class="row g-3" action="log&sign/register.php" method="post">
          <input type="text" placeholder="Nombre" name="nombre" required>
          <input type="text" placeholder="RFC" name="rfc" required>
          <input type="text" placeholder="Correo" name="correo" required>
          <input type="password" placeholder="Contraseña" name="contrasena" required>
          <button type="submit" value="Registrarte" class="btn btn-success btn-registro rounded-pill botons">Registrar</button>
          <a href="index.php">¿Ya tienes una cuenta?</a>
        </form>      
      </div>
    </div>     
  </div>

  <!-- Mis scripts --> 
  <script src="log&sign/script_index.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>

</html>