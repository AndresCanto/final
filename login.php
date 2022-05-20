<?php
    session_start();

    include ('db.php');

    $correo = $_POST['correo'];
    $contrasena = $_POST['contra'];
    //Contraseña Encriptada
    $contra = hash('sha512', $contrasena);

    $query = "SELECT*FROM users WHERE correo ='$correo' AND contrasena = '$contra'";

    $login = mysqli_query($conexion, $query);

    if(mysqli_num_rows($login)){
        $_SESSION['nombre'] = $correo;
        header("location: home.php");
        exit;
    } 
    
    // a lo mejor puedo hacer esto con bootstrap5
    else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos");
                window.location = "index.php";
            </script>
        ';
    }
