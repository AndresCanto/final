<?php 

include '../db/db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "DELETE FROM providers WHERE ProviderID = $id";
    $result = mysqli_query($conexion,$query);
     
    if (!$result) {
        die("Query fiiled");
    } 

    header("location: main_prov.php");

}

?>