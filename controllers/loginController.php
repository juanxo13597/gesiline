<?php
require_once("../db/db.php");
session_start();
if(isset($_POST['user']) && isset($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pwd = hash('sha256', $pass);

    $sql = "select * from usuarios where name='$user' && password='$pwd'";

    $resultado = db::conexion()->query($sql);

    if($resultado->num_rows>0){

        while($row = $resultado->fetch_assoc()){
            $role = $row['role'];
            $id = $row['id'];
        }

        $_SESSION['usuario'] = $user;
        $_SESSION['pass'] = $pass;
        $_SESSION['role'] = $role;
        $_SESSION['id'] = $id;

        header("location:../index.php");


    }else{
        header("location:../login.php?e=1");
    }

}

?>