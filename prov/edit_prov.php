<?php 

  include '../db/db.php';

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "SELECT * FROM providers WHERE ProviderID = $id";
    $result = mysqli_query($conexion,$query);
    
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $nombre = $row['nombreP1'];
      $concepto = $row['conceptoP1'];
      $rfc = $row['rfcP1'];
      $subtotal = $row['subtotalP1'];
      $descuento = $row['descuentoP1'];
      $iva = $row['ivaP1'];
      $total = $row['totalP1'];
    } 
  }

  if(isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombreP1'];
    $concepto = $_POST['conceptoP1'];
    $rfc = $_POST['rfcP1'];
    $subtotal = $_POST['subtotalP1'];
    $descuento = $_POST['descuentoP1'];
    $iva = $_POST['ivaP1'];
    $total = $_POST['totalP1'];

    $consulta = "UPDATE providers SET nombre = '$nombre', concepto = '$concepto', rfc = '$rfc', subtotal = '$subtotal', 
    descuento = '$descuento' , iva = '$iva' , total = '$total'";
    mysqli_query($conexion, $consulta);

    header("location: main_prov.php");
  }
?>
<?php include '../template/header.php' ; ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-header text-center">
          <h2>Actualiza la infomración</h2>
        </div>
        <div class="card-body">
          <form action="edit_prov.php?id=<?php echo $_GET['id']?>" method="post" class="p-4">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                      <label for="" class="form-label">Nombre:</label>
                      <input type="text" class="form-control" name="nombreP1" value=<?php echo $nombre?> required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                      <label for="" class="form-label">Concepto:</label>
                      <input type="text" class="form-control" name="conceptoP1" value=<?php echo $concepto?> required>
                  </div>               
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                      <label for="" class="form-label">RFC</label>
                      <input type="text" class="form-control" name="rfcP1" value=<?php echo $rfc?> required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="" class="form-label">Subtotal:</label>
                    <input type="number" class="form-control" name="subtotalP1" value=<?php echo $subtotal?> required>
                  </div>                
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="" class="form-label">Descuento:</label>
                    <input type="number" class="form-control" name="descuentoP1" value=<?php echo $descuento?> required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="" class="form-label">IVA:</label>
                    <input type="number" class="form-control" name="ivaP1" value=<?php echo $iva?> required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="" class="form-label">Total:</label>
                    <input type="number" class="form-control" name="totalP1" value=<?php echo $total?> required>
                  </div>
                </div>
                <div class="col-md-3 pt-3">
                  <div class="d-grid pt-3">
                      <button class="btn btn-success" name="update"><i class="fa-regular fa-floppy-disk"></i></button>
                  </div>
                </div>
                <div class="col-md-3 pt-3">
                  <div class="d-grid pt-3">
                      <button class="btn btn-secondary" onclick="window.loaction.href='main_prov.php'"><i class="fa-solid fa-right-to-bracket"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form>           
        </div>
      </div> 
    </div>
  </div>
</div>