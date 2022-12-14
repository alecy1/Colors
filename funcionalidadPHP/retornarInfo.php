<?php
/*En la variable $mysqli guardo la conexion de la base de datos y compruebo si hay error de conexion con 
$mysqli->connect_error, si esta instruccion da true retorno un mensaje de error. */
$mysqli = new mysqli("localhost", "root", "", "listadequehaceres");
  if($mysqli->connect_error) {
    exit("No se puede conectar a la base de datos");
  }

$name = $_GET['q'];
if (isset($_GET['q'])){ 
    switch ($name){
      /*Se llama a la funcion mostrarRegistros($mysqli), para desplegar la lista de registros.*/
      case 'mostrar':
        mostrarRegistros($mysqli);
        break; 
      /*Se llama a la funcion eliminar_registro, para eliminar registro de la tabla listdeitems */
      case 'eliminar';
        eliminar_registro($mysqli);
        break;
        // default;
        // insertaItem($name,$mysqli);
        // break;
    }
}

function insertaItem($name,$mysqli){
  $sql = "INSERT INTO listdeitems (Nombre) VALUES ('$name')";
  if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully";
  } else {echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);}
}

/*En la funcion mostrarRegistros, genero un SELECT de la tabla listdeitems, para mostrar los 
registros o lista de quehaceres en la pagina */
function mostrarRegistros($mysqli){
  $retorna ="";
  $sql = "SELECT Id, Nombre FROM listdeitems";
  $result = $mysqli->query($sql);
  if ($result->num_rows > 0) {
    $contador=1;
    while($row = $result->fetch_assoc()) {
      $retorna .= "<li>".$row["Nombre"]."</li>";
    }
  } else {echo "No hay items ingresados";}
  echo $retorna;
}

/*En la funcion eliminar_registro, codifique un DELETE para la tabla listdeitems y eliminar los registros */
function eliminar_registro($mysqli){
  $sql = "DELETE FROM listdeitems";
  $result = $mysqli->query($sql);
  echo "Se elimino la lista de quehaceres";
}



?>

