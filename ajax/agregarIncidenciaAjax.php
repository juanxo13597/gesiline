<?php
require_once("../db/db.php");
 
$connect = db::conexion();
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "
 SELECT * FROM clientes WHERE nombre LIKE '%".$request."%'
";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){
  $data[] = $row["nombre"];
 }
 echo json_encode($data);
}

?>