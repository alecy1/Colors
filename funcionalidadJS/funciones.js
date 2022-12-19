
/*El objetivo de la funcion insertaInformacion(), es generar los registros de los items, 
para lograr el registro se utiliza la codificacion del archivo insertaInfo.php*/
  function insertaInformacion() {
    let item = document.forms["myForm"]["item"].value;
      if (item == "") {
        document.getElementById('warning').innerHTML="* Se requiere que escribas el item";
        return false;
      }else{
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("registro").innerHTML = this.responseText;
        }
        xhttp.open("POST", "./funcionalidadPHP/insertaInfo.php?q="+item);
        xhttp.send();
      }
  }

/*El objetivo de la funcion mostrarLista(), es mostrar la lista de items registrados. */
  function mostrarLista(){
  var opcion = document.getElementById("mostrar").value;
  fetch("./funcionalidadPHP/retornarInfoB.php",{method:"POST",body:opcion})
    .then(res => res.text())
    .then(respuesta => {
      document.getElementById("formItems").innerHTML= respuesta;
    });
    return false;
}

/*El objetivo de la funcion es seleccionar todos los checkbox*/
  function seleccionar() {
    var seltodo = document.getElementById("seltodo");
    var text = document.getElementById("mensajeST");
    var form = document.forms["formItems"];
    var i;
    if (seltodo.checked == true){
      for (i=0; i < form.length; i++) {
        form.elements.item(i).checked=true;
      }
      //text.style.display = "block";
    } else {
      for (i=0; i < form.length; i++) {
        form.elements.item(i).checked=false;
      }
      //text.style.display = "none";
    }
  }

/*El objetivo de la funcion, es eliminar items de la lista. Se envio un POST a retornarInfoA.php*/
function eliminaCheckbox(){
  var form = document.getElementById("formItems");
  var opcion = "eliminar";
  item = new FormData(form);
  fetch("./funcionalidadPHP/retornarInfoA.php",{method:"POST",body:item,opcion:"eliminar"})
  .then(res => res.text())
  .then(respuesta => {
    document.getElementById("retornaMensaje").innerHTML= respuesta;
    mostrarLista();
  });
  return false;
}
