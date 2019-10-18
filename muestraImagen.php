<?php
	$resultado=mysqli_connect("localhost","root","","prueba_conjunta");
        $result=mysqli_query($resultado,"SELECT MAX(ID) FROM AUTOS");
        if($result){
            $row=mysqli_fetch_array($result);
            header("Content-type:".$row["foto"]);
            echo $row["foto"];
            echo"<a href='../index.html'>Volver al listado</a>";
        }else{
            echo"<a href='../index.html'>Error, vuelva al listado</a>";
        }
    ?>
