<?php
require_once("db/db.php");



if(isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['telefono'])){
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO clientes (nombre, direccion, telefono)
    VALUES ('$nombre', '$direccion', '$telefono')";

    if (db::conexion()->query($sql) === TRUE) {
        $respuesta = "<div class='alert alert-success' role='alert'>
        Cliente Guardado
      </div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}else{
    $respuesta = null;
}



require_once("views/agregarClienteView.php");
?>