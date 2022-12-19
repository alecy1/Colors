<!DOCTYPE html>
<html>
<head>
<title>Lista de quehaceres</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link id="estilos" rel="stylesheet" href="./style/naranja.css">
</head>
<body>
  <header class="row header">
		<nav class= "col- col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 menuli">
			<div style="textDecoration:none;color:black;margin-left:1rem">
				<img class="logo" src="./imagenes/pixelPay.png" alt="PIXELPAY"/>
        <ul class="menu">
          <li><a  href="./">Plantillas</a></li>
        </ul>
			</div>
		</nav>
	</header>
  <div class="container">
    <form name="myForm" onsubmit="return insertaInformacion()" method="post">
      <div class="row">
        <h2 class="titulo2" >Formulario para agregar un item</h2>
          <div class="col- col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 a-1">
            <span id="warning" class="warning"></span>
            <label class="form-label colorTexto" for="item">Escribe el item</label>
            <span id="registro" class="succes"></span>
            <input class="form-input form-input-lg" type="text" name="item" placeholder="Escribe item">
          </div>
        </div><br>
        <div class="row">
          <div class="col- col-sm-2 col-md-2 col-lg-3 col-xl-3 col-xxl-3 b-1">
            <button class="button button1" >Agregar</button>
          </div>
        </div>
    </form><br>
    <div class="row">
        <div class="col- col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
          <label style="font-size: medium;">Da clic en el siguiente boton, para ver los items.</label><br>
          <button class="buttonMostrarLista buttonML" type="submit" id="mostrar" onclick="mostrarLista(this.value)" value="mostrar">
            Mostrar Lista de quehaceres
          </button>
            <br><h4 id="retornaMensaje"></h4>
            <p id="mensajeST" style="display:none">Selecciono todos los items</p>
            <!-- Este checkbox pérmite seleccionar y deseleccionar los checkbox del form. -->
            <input type="checkbox" name="seltodo" id="seltodo" onclick="seleccionar()"/ class="botonCheckbox"><label style="font-size:small;">Selecciona todos los items </label>
            <!-- Form para desplegar lista de quehaceres -->
            <form id="formItems" method="post" onsubmit="return eliminaCheckbox()">
              
            </form>
        </div>
    </div>
  </div>
  <footer class="footer">
    <div class="row">
      <div class="col- col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <ul class="menu-footer">
          <li class="menu-li">Contactar</li>
          <li class="menu-li"><i class="fa fa-phone"></i> 44-48 836 294</li>
          <li class="menu-li"><i class="fa fa-envelope"></i> alecrz_16@hotmail.com</li>
          <li class="menu-li"><i class="fa fa-github"></i> alecrz_16@hotmail.com</li>
          <li class="menu-li">Horario telefonico: Lun a Vie 9:00h a 18:00h</li>
        </ul>
      </div>
    </div>
    <div class="row linea">
      <div class="col- col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <p class="text-center">&copy;  Company, Inc. All rights reserved.</p>
      </div>
    </div>
  </footer>
  <script src="./funcionalidadJS/funciones.js"></script>
</body>
</html>

