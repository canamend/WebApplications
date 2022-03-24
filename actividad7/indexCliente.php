<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>VIDEOTECA</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div id="wrap">
  <div id="masthead">
    <h1>CLIENTE</h1>
    <h1>VIDEOTECA / INICIO</h1>
    <div id="menucontainer">
      <div id="menunav">
        <ul>
          <li><a href="indexCliente.php" class="current"><span>INICIO</span></a></li>
          <li><a href="consultasCliente.php"><span>CONSULTAS</span></a></li>
          <li><a href="registrarseCliente.php"><span>RENTAS</span></a></li>
          <li><a href="contacttoCliente.php"><span>CONTACTO</span></a></li>
		  <li><a href="index.php"><span>Salir</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="container">
    <div id="sidebar">
      <h2>BUSCAR PELICULA </h2>
        <form action="buscarCliente.php" method="post">
        <fieldset>
        <legend></legend>
        <div> <span>
          <label for="txtsearch"> Buscar Pelicula:<img src="images/magnify.png" alt="search" /></label>
          </span> <span>
          <input type="text" value=""name="txtsearch" title="Text input: search" id="txtsearch" size="25" />
		  <br> 
		  <input type="submit" name="Enviar" value="Enviar">
		  <br>
          </span> </div>
        </fieldset>
      </form>
      <div id="navcontainer">LISTA DE PELICULAS RECIENTES <ul><li><a href="#">PELICULA 1 </a> </li>
          <li><a href="#">PELICULA 2 </a></li>
        </ul>
      </div>
      <p>&nbsp;</p>
    </div>
    <div id="content">
      <h2>Bienvenidos</h2>
      <p>Cliente: </p>
      <p>Esperamos que disfrutes tu visita: </p>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<div id="footer"><ul>
          <li><a href="Menu.php" class="current"><span>SALIR</span></a></li>
        </ul></div>
</body>
</html>
