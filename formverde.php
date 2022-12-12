<!DOCTYPE html>
<html>
<head>
<title>Lista de quehaceres</title>
<link id="estilos" rel="stylesheet" href="./style/verde.css">
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
      <div class="col- col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <input class="buttonMostrarLista" type="submit" id="mostrar" onclick="retornaInformacion(this.value)" value="mostrar"/>
        <ol id="mostrarInformacion"></ol>
      </div>
      <div class="col- col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <input class="buttonMostrarLista" class="eliminar" type="submit" id="eliminar" onclick="eliminaLista(this.value)" value="eliminar" />
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="row">
      <div class="col- col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <ul class="menu-footer">
          <li class="menu-li">Contactame</li>
          <li class="menu-li">Telefono: 44-48 836 294</li>
          <li class="menu-li">Email: ale@hotmail.com</li>
          <li class="menu-li">WhatsApp: 48-32 456 944</li>
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

