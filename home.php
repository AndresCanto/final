<?php
  session_start();

  if(!isset($_SESSION['nombre'])) {
    echo '<script>
      alert("Por favor inicie sesión");
      window.location = "index.php";
      </script>';
    session_destroy();
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- Bootstrap CSS -->
  <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

  <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
  <!-- https://cdnjs.com/libraries/font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <!-- Mis estilos -->
  <link rel="stylesheet" href="style_home.css">
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-light bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Balanze</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
        aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse mx-auto navbar-collapse" id="navbarID">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" aria-current="page" href="#">Library</a>
          <a class="nav-link" aria-current="page" href="#">About</a>
          <button class="btn btn-primary"><a class="nav-link" aria-current="page" href="cerrar.php">Cerrar</a></button>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-12">
        
    </div>
  </div>

</body>

</html>