<?php 
require_once("controllers/navegacion.php");
session_start();
$e=null;
$messageError=null;
if(isset($_GET['e'])){
    $e= $_GET['e'];
    if($e == 1){
        $messageError = "<div class='alert alert-primary' role='alert'>
        Usuario Y/O Contraseñas incorrectas.
      </div>";
    }
}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gesiline</title>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- js -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>
</head>
<body>

<div class="container mt-5">
<center class="mt-4">
<img src="assets/images/gesiline.jpg" alt="logo" width="250">
</center>

<div class="border border-primary col-md-3 ml-auto mr-auto mt-2"></div>
<div class="border border-primary col-md-3 ml-auto mr-auto pt-1" id="content">
<?=$messageError?>
<form action="controllers/loginController.php" method="post">

<div class="form-group">
<input type="text" name="user" class="form-control mt-2" placeholder="Usuario" required>
</div>

<div class="form-group">
<input type="password" name="pass" class="form-control" placeholder="Clave" required>
</div>

<div class="form-group">
<button type="submit" class="btn btn-outline-primary">Entrar</button>
</div>

</form>


</div>


</div>
    
</body>
</html>