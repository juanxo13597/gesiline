<?php
    require_once("db/db.php");

    $sql = "SELECT *
    FROM clientes C, incidencias I
    WHERE C.id = I.de_cliente && I.estado = 1 ORDER BY I.id DESC";
    $resultado = db::conexion()->query($sql);

    $sql_historial = "SELECT *
    FROM clientes C, incidencias I
    WHERE C.id = I.de_cliente && I.estado = 0 ORDER BY I.id DESC";
    $resultado_historial = db::conexion()->query($sql_historial);

?>