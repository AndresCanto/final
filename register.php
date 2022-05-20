<?php
    include ('db.php');
    // Recoje lo que se escribio en el form
    $nombre = $_POST['nombre'];
    $rfc = $_POST['rfc'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
        //Contraseña Encriptada
    $contra = hash('sha512', $contrasena);

    // Guarda en la base de datos 'users' lo recojido arriba
    $query ="INSERT INTO users(nombre, ref, correo, contrasena)
            VALUE('$nombre','$rfc','$correo','$contra')";

    // Evita que se repitan registros repetidos
    $verificar = mysqli_query($conexion,"SELECT*FROM users WHERE correo='$correo'");
    if(mysqli_num_rows($verificar) > 0) {
        echo '
            <script>
                alert("Este correo ya esta registrado");
                window.location = "index.php";
            </script>
        ';
        exit();
    }    

    // Revisa si se guardo coorectamente la info
    $ejecutar = mysqli_query($conexion,$query);
    if($ejecutar) {
        echo '
            <script>
                alert("Almacenado exitosamente");
                window.location = "index.php";
            </script>
        ';
    }
?>