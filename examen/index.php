<html>
    <head>

    </head>
    <body>
    <div id="content">
      <h2>Adopta mascota </h2>
      <p>&nbsp;</p>
	  <?PHP
        $link=mysqli_connect("localhost:3308","root","");
        mysqli_select_db($link,"adopta_mascota");

        $result=mysqli_query($link,"select * from catalogo");

        echo "<table border='1'>";
        echo "<TR><TD> Id Catalogo</TD><TD> Nombre </TD>
                <TD> Edad</TD><TD>Raza</TD><TD> Descripcion </TD> </TR>";

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
    </body>
</html>