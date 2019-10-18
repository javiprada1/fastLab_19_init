<?php
    $list=mysqli_query($resultado,"SELECT * FROM AUTOS");
    echo"<table>";
    echo"<tr><th>Marca</th><th>Modelo</th><th>Foto</th>";
    $select=mysqli_fetch_array($list);
    for($i=mysqli_num_rows($list);$i>=0;$i--){
        echo"<tr>";
        for($j=mysqli_num_rows($list);$j>=0;$j--){
            echo"<th>".$select["MARCA"]."</th><th>".$select["MODELO"]."</th><th>".$select["FOTO"]."</th>";
        }
        $select=mysqli_fetch_array($list);
        echo"</tr>";
    }
echo"</table>";
    ?>