<?php
require_once("models/verIncidenciaModel.php");

if(isset($_GET['id'])){

    if($resultado->num_rows>0){
        while($row = $resultado->fetch_assoc()){
            $data['id'] = $row['id'];
            $data['nombre'] = $row['nombre'];
            $data['direccion'] = $row['direccion'];
            $data['descripcion'] = $row['descripcion'];
            $data['tipo'] = $row['tipo'];
            $data['estado'] = $row['estado'];
            $data['create_at'] = $row['create_at'];
            $data['update_at'] = $row['update_at'];
        }
    }else{
        $data = null;
    }

    if($data == null){
        header("location:index.php");
    }

}

$message = null;
if(isset($_POST['guardar'])){
    
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $id = $_GET['id'];
    $hoy = date('Y-m-d H:i:s');

    $sql = "UPDATE incidencias SET descripcion='$descripcion', estado='$estado', update_at='$hoy' WHERE id=$id";
    if(db::conexion()->query($sql) === TRUE){
        $message = "<div class='alert alert-success' role='alert'>
        Datos del incidencia guardados correctamente.
      </div>";
    }else{
        $message = "<div class='alert alert-danger' role='alert'>
        Error al guardar datos.
      </div>";
    }
}

//fechas de creacion y actualizacion
$fechas = "<small>Creado: ".date('d/m/Y H:i', strtotime($data['create_at']));
if($data['update_at']!= null){
    $fechas .= " ~ Actualizado: ".date('d/m/Y H:i', strtotime($data['update_at']));
}
$fechas .= "</small>";




require_once("views/verIncidenciaView.php");
?>