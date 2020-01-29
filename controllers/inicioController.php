<?php
require_once("models/inicioModel.php");
$data = "";

if($resultado->num_rows>0){
    while($row = $resultado->fetch_assoc()){
        $data .= "<tr>
        <td>".$row['id']."</td>
        <td><a href='?p=verCliente&&id=".$row['id']."'>".$row['nombre']."</a></td>
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


require_once("views/inicioView.php");
?>

