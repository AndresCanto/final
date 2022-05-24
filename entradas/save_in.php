<?php 

include '../../final/db/db.php';

if(isset($_POST['save_prov'])) {
    $nombreP2 = $_POST['nombreP1'];
    $conceptoP2 = $_POST['nombreP1'];
    $rfcP2 = $_POST['rfcP1'];
    $subtotalP2 = $_POST['subtotalP1'];
    $descuentoP2 = $_POST['descuentoP1'];
    $ivaP2 = $_POST['ivaP1'];
    $totalP2 = $_POST['totalP1'];
    
    $query = "SELECT * FROM providers WHERE ProviderID = $id";
    $result = mysqli_query($conexion,$query);
     
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $concepto = $row['concepto'];
        $rfc = $row['rfc'];
        $subtotal = $row['subtotal'];
        $descuento = $row['descuento'];
        $iva = $row['iva'];
        $total = $row['total'];
    } 

    header("location: main_prov.php");

}

?>