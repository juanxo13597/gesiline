<?php
require_once("models/inicioModels.php");

if($resultado->num_rows>0){
    while($row = $resultado->fetch_assoc()){
        $data = "<tr>
        <td>".$row['id']."</td>
        <td>".$row['nombre']."</td>
        <td>".$row['direccion']."</td>
        <td>".$row['telefono']."</td>
        </tr>";
    }
}else{
    $data = "<tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
}


require_once("views/inicioViews.php");
?>
