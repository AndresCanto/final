<?php include '../db/db.php'; ?>
<?php include '../template/header.php'; ?>



    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
          <div class="col-md-9">
            <h3 class="mt-2">Egresos / Gastos</h3>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Nuevo
              </button>
            
            <table id="gastos" class="display compact">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Concepto</th>
                  <th scope="col">RFC</th>
                  <th scope="col">Subtotal</th>
                  <th scope="col">Descuento</th>
                  <th scope="col">IVA</th>
                  <th scope="col">Total</th>
                  <th class="text-center" scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $query = "SELECT * FROM `providers`";
                $resultado = mysqli_query($conexion,$query);

                while($row = mysqli_fetch_array($resultado)) { ?>
                <tr>
                  <td><?php echo $row['ProviderID']?></td>
                  <td><?php echo $row['nombre']?></td>
                  <td><?php echo $row['concepto']?></td>
                  <td><?php echo $row['rfc']?></td>
                  <td><?php echo $row['subtotal']?></td>
                  <td><?php echo $row['descuento']?></td>
                  <td><?php echo $row['iva']?></td>
                  <td><?php echo $row['total']?></td>
                  <td class="text-center">
                      <a href="edit_prov.php?id=<?php echo $row['ProviderID']?>" class="btn btn-secondary">
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

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Egresos / Gastos / Outcomes</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body"> 

                  <form action="save_prov.php" method="post" class="p-4">

                    <div class="container"><div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">Nombre:</label>
                          <input type="text" class="form-control" name="nombreP1" required autofocus>
                        </div>                    
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">Concepto:</label>
                          <input type="text" class="form-control" name="conceptoP1" required>
                        </div>                    
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">RFC</label>
                          <input type="text" class="form-control" name="rfcP1" required>
                        </div>                    
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">Subtotal</label>
                          <input type="number" class="form-control" name="subtotalP1" required>
                        </div>                    
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">Descuento</label>
                          <input type="number" class="form-control" name="descuentoP1" required>
                        </div>                    
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">IVA</label>
                          <input type="number" class="form-control" name="ivaP1" required>
                        </div>                    
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">Total</label>
                          <input type="number" class="form-control" name="totalP1" required>
                        </div>                    
                      </div>
                      <div class="col-md-6 pt-3">
                        <div class="d-grid pt-3">
                          <input type="hidden" name="oculto" value="1">
                          <input type="submit" class="btn btn-primary" value="Registrar" name="save_prov">
                        </div>                    
                      </div>
                    </div></div>
                  </form>

                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div>

              </div>
            </div>
          </div>
        </div>
    </div>

<?php include '../template/footer.php'; ?>