<?php 
require_once("controllers/navegacion.php");
session_start();
if(empty($_SESSION['usuario'])){
  header("location:login.php");
}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gesiline</title>
    <link rel="shortcut icon" href="assets/images/ico.ico">
    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- js -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/bootstrap-autocomplete.min.js"></script>
    <script src="assets/js/bootstrap3-typeahead.min.js"></script>
    <script src="assets/js/main.js"></script>

</head>
<body>

<div class="container">

<!-- logo -->
<div class="mt-4"><center>
  <a href="index.php" class="j-logo"><img src="assets/images/gesiline.jpg" alt="logo" width="250"></a>
</center></div>


<!-- fin logo -->
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-2">
  <a class="navbar-brand" href="index.php" >Gesiline</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="index.php">Ver</a>
          <a class="dropdown-item" href="?p=agregarCliente">Agregar</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Incidencias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?p=verIncidencias">Ver</a>
          <a class="dropdown-item" href="?p=agregarIncidencia">Agregar</a>
        </div>
      </li>

    </ul>


    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?=$_SESSION['usuario'];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="controllers/logoutController.php?y=1">Salir</a>
        </div>
      </li>
    </ul>


  </div>
</nav>
<!-- fin navbar -->

<div class="border border-primary" id="content">
    <?php 
    if(!empty($_GET)){
      $get = $_GET['p'];
    }else{
      $get = null;
    }
    require_once(navegacion($get)); 
    ?>
</div>


</div>

    
</body>
</html>