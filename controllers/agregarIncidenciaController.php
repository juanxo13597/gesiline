<?php
require_once("models/agregarIncidenciaModel.php");


if(isset($_POST['guardar']) && isset($_POST['nombre']) && isset($_POST['tipo'])){

    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $creador = $_SESSION['id'];
    $nombre = $_POST['nombre'];
    $resultado = null;

    //obtener datos del cliente con ese nombre
    $sql = "SELECT * FROM clientes where nombre='$nombre'";
    $result = db::conexion()->query($sql);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $id = $row['id'];
        }

        // insertar los datos
        $insert = "INSERT INTO incidencias (tipo, de_cliente, descripcion, creada_por) VALUES ('$tipo', '$id', '$descripcion', '$creador')";

        if (db::conexion()->query($insert) === TRUE) {
            $resultado = "<div class='alert alert-success' role='alert'>
            Incidencia Guardada Correctamente.
          </div>";
        } else {
            $resultado = "<div class='alert alert-primary' role='alert'>
            Error: " . $insert . "<br>" . db::conexion()->error."
          </div>";
        }


    }else{
        $resultado = "<div class='alert alert-danger' role='alert'>
            Cliente no encontrado.
          </div>";
    }

    

    


}


require_once("views/agregarIncidenciaView.php");
?>