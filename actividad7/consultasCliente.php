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
    <h1>VIDEOTECA / REGISTRARSE </h1>
    <div id="menucontainer">
      <div id="menunav">
        <ul>
          <li><a href="indexCliente.php"><span>INICIO</span></a></li>
          <li><a href="consultasCliente.php" class="current"><span>CONSULTAS</span></a></li>
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
      <h2>REGISTRARSE</h2>
      <p>Aqui</p>
	   <?PHP
   $link=mysqli_connect("localhost:3308","root","");
   mysqli_select_db($link,"videoteca");

   $result=mysqli_query($link,"select * from pelicula");

   echo"<A href='grafica.php'>Ver Ranking </A><br>";
   echo"<A href='ejemplo2.php'>Generar PDF </A><br>";
   echo"<A href='Insertar.php'>Insertar Nueva Pelicula </A><br><br>";

   echo "<table border='1'>";
   echo "<TR><TD> Id_ Pelicula</TD><TD> Titulo </TD>
         <TD> Director</TD><TD>Actor</TD><TD> Imagen </TD> </TR>";

   while ($row=mysqli_fetch_array($result))
   {
      $id=$row['id_pelicula'];
      $ti=$row['titulo'];
      $di=$row['director'];
      $ac=$row['actor'];
      $im=$row['imagen'];

      echo"<TR><TD>$id</TD><TD>$ti</TD><TD>$di</TD><TD>$ac</TD>
           <TD><A href='consultaAdmin2.php?id_peli=$id'>
           <img src='misImagenes/$im' width='80' height='80'/> </A>
           </TD> </TR>";  
   }
   mysqli_free_result($result); 
   mysqli_close($link); 
   echo"</table>";
?>  
    </div>
  </div>
</div>
<div id="footer"><ul>
          <li><a href="Menu.php" class="current"><span>SALIR</span></a></li>
        </ul></div>
</body>
</html>
