<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BASE DE DATOS</title>

</head>
<body>
<?php
    echo "Hola Bienvenido";    
    $conexion = mysqli_connect("localhost","root","","prueba_conjunt");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
    }

    if (!mysqli_query($conexion,"INSERT INTO autos (marca,modelo) VALUES('audi','a1')")){
        echo ("Error description: " . mysqli_error($conexion));
    }
    // $consulta = "SELECT foto FROM autos WHERE id=1"; // id={$_POST['id']}";
    // $resultado = @mysqli_query($consulta); // or die(mysqli_error());
    // $datos = mysqli_fetch_assoc($resultado);

    ?>
</body>
</html>

