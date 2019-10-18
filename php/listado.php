<?php
    $resultado=mysqli_connect("localhost","root","","prueba_conjunta");
    $list=mysqli_query($resultado,"SELECT * FROM AUTOS");
    echo"<table>";
    header("Content-type: image/jpg");
    echo"<tr><th>Marca</th><th>Modelo</th><th>Foto</th>";
    $select=mysqli_fetch_array($list);
    for($i=mysqli_num_rows($list);$i>=0;$i--){
        echo"<tr>";
        for($j=mysqli_num_rows($list);$j>=0;$j--){
            echo $i;
            echo"<th>".$select["marca"]."</th><th>".$select["modelo"]."</th><th>".base64_decode($select["foto"])."</th>";
        }
        $select=mysqli_fetch_array($list);
        echo"</tr>";
    }
echo"</table>";
    ?>
