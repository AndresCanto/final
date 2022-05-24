<?php 

include '../db/db.php';

if(isset($_POST['save_prov'])) {
    $nombreP2 = $_POST['nombreP1'];
    $conceptoP2 = $_POST['nombreP1'];
    $rfcP2 = $_POST['rfcP1'];
    $subtotalP2 = $_POST['subtotalP1'];
    $descuentoP2 = $_POST['descuentoP1'];
    $ivaP2 = $_POST['ivaP1'];
    $totalP2 = $_POST['totalP1'];
    
    $query = "INSERT INTO providers (nombre,concepto,rfc,subtotal,descuento,iva,total) 
    VALUES ('$nombreP2','$conceptoP2','$rfcP2','$subtotalP2','$descuentoP2','$ivaP2','$totalP2')";
    $result = mysqli_query($conexion,$query);
     
    if (!$result) {
        die("Query fiiled");
    } 

    header("location: main_prov.php");

}

?>