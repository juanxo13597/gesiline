<?php
class db{

    public static function conexion(){

        $conexion=new mysqli("localhost", "root", "", "gesiline");
             
        $conexion->query("SET NAMES 'utf8'");
 
        return $conexion;
    }
}


?>