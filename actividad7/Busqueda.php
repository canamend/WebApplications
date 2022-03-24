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
            <h1>VIDEOTECA / INICIO</h1>
            <div id="menucontainer">
                <div id="menunav">
                    <ul>
                        <li><a href="index.php"><span>INICIO</span></a></li>
                        <li><a href="registrarse.php"><span>REGISTRARSE</span></a></li>
                        <li><a href="consultas.php"><span>CONSULTAS</span></a></li>
                        <li><a href="busqueda.php" class="current"><span>BUSQUEDA</span></a></li>
                        <li><a href="contacto.php"><span>CONTACTO</span></a></li>
                        <li><a href="accesso.php"><span>ACCESO</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="container">
            <div id="sidebar">
                <h2>BUSCAR PELICULA </h2>
                <form action="Busqueda.php" method="post">
                    <fieldset>
                        <legend></legend>
                        <div> <span>
                                <label for="txtsearch"> Buscar:<img src="images/magnify.png" alt="search" /></label>
                            </span> <span>
                                <input type="text" value="" name="txtsearch" title="Text input: search" id="txtsearch" size="25" />
                                <br>
                                <input type="submit" name="Enviar" value="Enviar">
                                <br>
                            </span> </div>
                    </fieldset>
                </form>
                <p>&nbsp;</p>
            </div>
            <div id="content">
                <?PHP
                if ($_REQUEST) {
                    $bus = $_REQUEST['txtsearch'];
                    echo "El dato a buscar es: $bus <br>";

                    $link = mysqli_connect("localhost:3308", "root", "");
                    mysqli_select_db($link, "videoteca");

                    $result = mysqli_query($link, "select * from pelicula where titulo like '%$bus%'");
                    echo "<table border='1'>";
                    echo "<TR><TD> Id_ Pelicula</TD><TD> Titulo </TD>
         <TD> Director</TD><TD>Actor</TD><TD> Imagen </TD> </TR>";

                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['id_pelicula'];
                        $ti = $row['titulo'];
                        $di = $row['director'];
                        $ac = $row['actor'];
                        $im = $row['imagen'];

                        echo "<TR><TD>$id</TD><TD>$ti</TD><TD>$di</TD><TD>$ac</TD>
           <TD><img src='misImagenes/$im' width='80' height='80'/>
           </TD> </TR>";
                    }
                    mysqli_free_result($result);
                    mysqli_close($link);
                    echo "</table>";
                }

                ?>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
    <div id="footer">
        <ul>
            <li><a href="Menu.php" class="current"><span>SALIR</span></a></li>
        </ul>
    </div>
</body>

</html>