<?php
require_once("db/db.php");
    
$id = $_GET['id'];
$sql = "select * from incidencias where id=$id";
$sql = "SELECT *
FROM clientes C, incidencias I
WHERE I.id = $id";
$resultado = db::conexion()->query($sql);
?>