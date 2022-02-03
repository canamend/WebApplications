<html>
<head><title> Resultados </title></head>
<body>
<h2> Votos resultantes </h2>
<hr>
<?PHP
$fp=fopen("votos.dat","a+");
$pri=0;
$pan=0;
$prd=0;
$na=0;
$mc=0;
$verde=0;
$pes=0;
$morena=0;
$nulo=0;
do{
	$contenido = fgets($fp);

	$voto=substr($contenido,strpos($contenido," ",0)+1,strlen($contenido)-1);
	$voto=substr($voto,0,strlen($voto)-1);

	//echo "$contenido $voto<br>";

	if(strcmp($voto,"PRI")==0)
			$pri++;
	else if(strcmp($voto,"PAN")==0)
			$pan++;
		else if(strcmp($voto,"PRD")==0)
				$prd++;
			else if(strcmp($voto,"Morena")==0)
					$morena++;
				else if(strcmp($voto,"NULL")==0)
						$nulo++;
					else if(strcmp($voto,"Nueva_Alianza")==0)
							$na++;
						else if(strcmp($voto,"Movimiento_Ciudadano")==0)
								$mc++;
							else if(strcmp($voto,"Verde")==0)
									$verde++;
								else if(strcmp($voto,"PES")==0)
									$pes++;
	
}while($contenido!=null);
fclose($fp);
//echo "PRI: $pri <br>";
//echo "PAN: $pan <br>";
//echo "PRD: $prd <br>";
//echo "MORENA: $morena <br>";
//echo "Votos nulos: $nulo <br>";
?>
<img src="assets/partido1.png" width="150" height="150">
<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos: $na votos"; ?> ">
<br>
<img src="assets/partido2.png" width="150" height="150">
<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos: $mc votos"; ?> ">
<br>
<img src="assets/partido3.png" width="150" height="150">
<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos: $pri votos"; ?> ">
<br>
<img src="assets/partido4.png" width="150" height="150">
<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos: $prd votos"; ?> ">
<br>
<img src="assets/partido5.png" width="150" height="150">
<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos: $pan votos"; ?> ">
<br>
<img src="assets/partido6.png" width="150" height="150">
<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos: $verde votos"; ?> ">
<br>
<img src="assets/partido7.png" width="150" height="150">
<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos: $pes votos"; ?> ">
<br>
<img src="assets/partido8.png" width="150" height="150">
<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos: $morena votos"; ?> ">
<br>

<img src="assets/nulo.jpg" width="150" height="150">
<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos: $nulo votos"; ?> ">
<br>

</body>
</html>