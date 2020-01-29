<?php
require_once("db/db.php");
    
$id = $_GET['id'];
$sql = "select * from clientes where id=$id";
$resultado = db::conexion()->query($sql);
?>