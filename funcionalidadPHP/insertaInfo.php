<?php
/*En la variable $mysqli guardo la conexion de la base de datos y compruebo si hay error de conexion con 
$mysqli->connect_error, si esta instruccion da true retorno un mensaje de error. */
$mysqli = new mysqli("localhost", "root", "", "listadequehaceres");
  if($mysqli->connect_error) {
    exit('No se puede conectar a la base de datos');
  }

  $name = $_GET['q'];
  /*La funcion insertaItem, genera un registro en la tabla listdeitems.*/
  function insertaItem($name,$mysqli){
    $sql = "INSERT INTO listdeitems (Nombre) VALUES ('$name')";
    if (mysqli_query($mysqli, $sql)) {
      echo "Nuevo registro creado con éxito";
    } else {
      echo "No se genero el registro: " . $sql . "<br>" . mysqli_error($mysqli);
    }
  }
  insertaItem($name,$mysqli);
?>