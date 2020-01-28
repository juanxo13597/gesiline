<?php
session_start();
if(isset($_GET['y'])){
    if($_GET['y']== '1'){

        session_destroy();
        header("location:../login.php");
    }

}else{
    header("location:../index.php");
}
?>