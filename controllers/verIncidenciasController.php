<?php
require_once("models/verIncidenciasModel.php");

$data = "";
$data_historial = "";

if($resultado->num_rows>0){
    while($row = $resultado->fetch_assoc()){
        $data .= "<tr>
        <td>".$row['id']."</td>
        <td><a href='?p=verIncidencia&&id=".$row['id']."'>".$row['nombre']."</a></td>
        <td>".$row['tipo']."</td>
        <td>".$row['descripcion']."</td>
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

if($resultado_historial->num_rows>0){
    while($row = $resultado_historial->fetch_assoc()){
        $data_historial .= "<tr>
        <td>".$row['id']."</td>
        <td><a class='text-info' href='?p=verIncidencia&&id=".$row['id']."'>".$row['nombre']."</a></td>
        <td>".$row['tipo']."</td>
        <td>".$row['descripcion']."</td>
        </tr>";
    }
}else{
    $data_historial = "<tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
}


require_once("views/verIncidenciasView.php");
?>