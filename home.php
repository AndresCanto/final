<?php
    session_start();

    if(!isset($_SESSION['nombre'])) {
        echo '
            <script>
                alert("Por favor inicie sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <h1>Balacea tu balance
    </h1>
    <a href="cerrar.php">Cerrar</a>
</head>
<body>
    
</body>
</html>