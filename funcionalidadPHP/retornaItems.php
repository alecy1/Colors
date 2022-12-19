<?php
  $mysqli = new mysqli("localhost", "root", "", "listadequehaceres");
  if($mysqli->connect_error) {
    exit("Falló la conexión");
  }

/*El objetivo de la funcion mostrarRegistros($mysqli), es desplegar la lista de items, de la tabla listdeitems*/ 
function mostrarRegistros($mysqli){
  $retorna ="";
  $sql = "SELECT Id, Nombre FROM listdeitems";
  $result = $mysqli->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $retorna .= "<input type='checkbox' name='item[]' value=".$row["Id"]." class='botonCheckbox'>".
      "<label style='font-size:small;'>".$row["Nombre"]."</label><br>";
    }
  } else {
    echo "No hay items ingresados<br>";
  }
  echo $retorna."<input type='submit'  value='eliminar' class='buttonMostrarLista' />";
}

mostrarRegistros($mysqli);  
$mysqli->close();
?>
