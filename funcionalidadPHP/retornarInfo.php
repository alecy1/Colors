<?php
$mysqli = new mysqli("localhost", "root", "", "listadequehaceres");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$name = $_GET['q'];
 if (isset($_GET['q'])){ 
    switch ($name){
        //casos de registros
        case 'mostrar':
            mostrarRegistros($mysqli);
            break; 

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
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
  }
}

function mostrarRegistros($mysqli){
  $retorna ="";
  $sql = "SELECT Id, Nombre FROM listdeitems";
  $result = $mysqli->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    $contador=1;
    while($row = $result->fetch_assoc()) {
      $retorna .= "<li>".$row["Nombre"]."</li>";
    }
  } else {
    echo "No hay items ingresados";
  }
  echo $retorna;
  
}

function eliminar_registro($mysqli){
  $sql = "DELETE FROM listdeitems";
  $result = $mysqli->query($sql);
  echo "Se elimino la lista de quehaceres";
}



?>

