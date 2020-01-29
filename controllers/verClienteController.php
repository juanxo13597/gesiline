<?php
require_once("models/verClienteModel.php");

if(isset($_GET['id'])){

    if($resultado->num_rows>0){
        while($row = $resultado->fetch_assoc()){
            $data['id'] = $row['id'];
            $data['nombre'] = $row['nombre'];
            $data['direccion'] = $row['direccion'];
            $data['telefono'] = $row['telefono'];
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
    
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $id = $_GET['id'];

    $sql = "UPDATE clientes SET nombre='$nombre', direccion='$direccion', telefono='$telefono' WHERE id=$id";
    if(db::conexion()->query($sql) === TRUE){
        $message = "<div class='alert alert-success' role='alert'>
        Datos del clientes guardados correctamente.
      </div>";
    }else{
        $message = "<div class='alert alert-danger' role='alert'>
        Error al guardar datos.
      </div>";
    }
}




require_once("views/verClienteView.php");
?>