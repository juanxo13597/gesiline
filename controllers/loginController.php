<?php
require_once("../db/db.php");
session_start();
if(isset($_POST['user']) && isset($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select * from usuarios where name='$user' && password='$pass'";

    $resultado = db::conexion()->query($sql);

    if($resultado->num_rows>0){

        while($row = $resultado->fetch_assoc()){
            $role = $row['role'];
        }

        $_SESSION['usuario'] = $user;
        $_SESSION['pass'] = $pass;
        $_SESSION['role'] = $role;

        header("location:../index.php");


    }else{
        header("location:../login.php?e=1");
    }

}

?>