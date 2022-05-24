<?php
    session_start();

    include ('../db/db.php');

    $correo = $_POST['correo'];
    $contrasena = $_POST['contra'];
    //Contraseña Encriptada
    //$contra = hash('sha512', $contrasena);

    $query = "SELECT*FROM users WHERE correo ='$correo' AND contrasena = '$contrasena'";

    $login = mysqli_query($conexion, $query);

    if(mysqli_num_rows($login)){
        $_SESSION['nombre'] = $correo;
        header("location: ../prov/main_prov.php"); //debe ir a inicio
        exit;
    } // a lo mejor puedo hacer esto con bootstrap5
    else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
?>  