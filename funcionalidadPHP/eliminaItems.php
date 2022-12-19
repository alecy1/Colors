<?php
/*En la variable $mysqli guardo la conexion de la base de datos y compruebo si hay error de conexion con 
$mysqli->connect_error, si esta instruccion da true retorno un mensaje de error. */
$mysqli = new mysqli("localhost", "root", "", "listadequehaceres");
  if($mysqli->connect_error) {
    exit("No se puede conectar a la base de datos");
  }

/*Eliminado id con foreach en la tabla listdeitems de la base de datos*/
function eliminar_registro($mysqli){
  if(!empty($_POST["item"])){
    foreach($_POST['item'] as $items)
    {
      if($mysqli->query("DELETE FROM listdeitems WHERE Id='$items'"))
      {
        echo "Se elimino el registro: ".$items."<br>";
      }
    }
  }else{ echo "Selecciona una opcion, para eliminar";}
}

eliminar_registro($mysqli);
$mysqli->close();
?>

