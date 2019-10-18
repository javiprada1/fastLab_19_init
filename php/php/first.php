<?php
//Recogemos datos del html
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$conexion = mysqli_connect("localhost","root","","prueba_conjunta");
$imagen_nom = $_FILES["foto"]["name"];
$imagen_type =$_FILES["foto"]["type"];
$imagen_size = $_FILES["foto"]["size"];
$limite_kb = 16384;
$imagen_tmp = $_FILES["foto"]["tmp_name"];
    if($imagen_nom == null || $imagen_size < $limite_kb){
        echo "No existe imagen o su tamaño es mayor a $limite_kb KB";
    }else{
        $permitidos = array("imagen/jpg", "image/jpeg","image/gif","image/png");
        if(in_array($imagen_type,$permitidos)){
            $imagen_escapada = base64_encode(file_get_contents($imagen_tmp));
            $resultado = mysqli_query($conexion,"INSERT INTO autos(marca,modelo,foto) VALUES ('$marca','$modelo','$imagen_escapada')");
            if($resultado){
            echo "El vehiculo ha sido subido con exito a la base de datos";
            }else{
            echo "Ocurrió algún error a la hora de subir el vehiculo a la base de datos";
            }
        }else{
        echo "Formato de archivo de imagen no permitido";
        }
    }
?>