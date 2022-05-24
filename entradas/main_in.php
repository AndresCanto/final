<?php include '../db/db.php'; ?>
<?php include '../template/header.php'; ?>



    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">Proveedores</div>
              <div class="card-body p-4">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Concepto</th>
                      <th scope="col">RFC</th>
                      <th class="text-center" scope="col">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $query = "SELECT `ProviderID`, `nombre`, `concepto`, `rfc` FROM `providers`";
                    $resultado = mysqli_query($conexion,$query);

                    while($row = mysqli_fetch_array($resultado)) { ?>
                    <tr>
                      <td><?php echo $row['ProviderID']?></td>
                      <td><?php echo $row['nombre']?></td>
                      <td><?php echo $row['concepto']?></td>
                      <td><?php echo $row['rfc']?></td>
                      <td class="text-center">
                          <a href="save_prov.php?id=<?php echo $row['ProviderID']?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                          </a>
                          <a href="delete_prov.php?id=<?php echo $row['ProviderID']?>" class="btn btn-danger">
                            <i class="far fa-trash-alt"></i>
                          </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            
              <!--
              <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <img src="..." class="rounded me-2" alt="...">
                  <strong class="me-auto">Balanze</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                  
                </div>
              </div>
              -->

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
                <div class="mb-3">
                  <label for="" class="form-label">Subtotal</label>
                  <input type="number" class="form-control" name="subtotalP1" required>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Descuento</label>
                  <input type="number" class="form-control" name="descuentoP1" required>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">IVA</label>
                  <input type="number" class="form-control" name="ivaP1" required>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Total</label>
                  <input type="number" class="form-control" name="totalP1" required>
                </div>
                <div class="d-grid">
                  <input type="hidden" name="oculto" value="1">
                  <input type="submit" class="btn btn-primary" value="Registrar" name="save_prov">
                </div>
              </form>
            </div>  
          </div>
        </div>
    </div>

<?php include '../template/footer.php'; ?>