
/*El objetivo de la funcion insertaInformacion(), es generar los registros de los items*/
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
 

/*El objetivo de la funcion retornaInformacion(), es mostrar la lista de items rwgistrados. */
    function retornaInformacion() {
      var lista = document.getElementById("mostrar").value;
      if (lista.length == 0) { 
        document.getElementById("mostrarInformacion").innerHTML = "";
        return;
      }
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function() {
        document.getElementById("mostrarInformacion").innerHTML = this.responseText;
      }
      xhttp.open("POST", "./funcionalidadPHP/retornarInfo.php?q="+lista);
      xhttp.send();
    }

/*El objetivo de la funcion eliminaLista(), es eliminar los registros de los items */
    function eliminaLista(){
      var elimina = document.getElementById("eliminar").value;
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function(){
        document.getElementById("mostrarInformacion").innerHTML=this.responseText;
      }
      xhttp.open("POST", "./funcionalidadPHP/retornarInfo.php?q="+elimina);
      xhttp.send();
    }

