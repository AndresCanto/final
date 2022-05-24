<?php 

  include '../../final/db/db.php';

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "INSERT INTO providers (nombre,concepto,rfc) VALUES ('$nombreP2','$conceptoP2','$rfcP2')";
    $result = mysqli_query($conexion,$query);
    
    if (!$result) {
        die("Query fiiled");
    } 

    header("location: main_prov.php");

  }

?>

<div class="card">
  <div class="card-header">Ingresar datos:</div>
    <form action="save_prov.php" method="post" class="p-4">
      <div class="mb-3">
          <label for="" class="form-label">Nombre:</label>
          <input type="text" class="form-control" name="nombreP1" required autofocus>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Concepto:</label>
          <input type="text" class="form-control" name="conceptoP1" required>
      </div>
      <div class="mb-3">
          <label for="" class="form-label">RFC</label>
          <input type="text" class="form-control" name="rfcP1" required>
      </div>
      <div class="d-grid">
          <input type="hidden" name="oculto" value="1">
          <input type="submit" class="btn btn-primary" value="Registrar" name="save_prov">
      </div>
    </form>
  </div> 
</div> 