<?php
$mysqli = new mysqli("localhost", "root", "", "listadequehaceres");
if($mysqli->connect_error) {
  exit('No se puede conectar a la base de datos');
}
$name = $_GET['q'];

function insertaItem($name,$mysqli){
  $sql = "INSERT INTO listdeitems (Nombre) VALUES ('$name')";
  if (mysqli_query($mysqli, $sql)) {
    echo "Nuevo registro creado con éxito";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
  }
}
insertaItem($name,$mysqli);
?>