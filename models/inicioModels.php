<?php
    require_once("db/db.php");

    $sql = "select * from clientes";
    $resultado = db::conexion()->query($sql);
?>