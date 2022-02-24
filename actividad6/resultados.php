<html>
<head>
	<title> Resultados </title>
</head>
<body>
	<h2> Votos resultantes </h2>
	<hr>
	<?PHP
	include "libchart/classes/libchart.php";
	require_once "conteo.php";

	$chart = new HorizontalBarChart(600, 270);
	$datos = new XYDataSet();

	$Conteo = new conteo();

	$servername = "localhost";
	$database = "votaciones";
	$username = "root";
	$password = "";
	// Create connections
	$conn = mysqli_connect($servername, $username, $password, $database);
	$sql = "SELECT * FROM partidos";
	$result = mysqli_query($conn, $sql);

	//Imprime conteo
	while ($row = mysqli_fetch_array($result)) {
		$id_part = $row['id_partido'];
		$politico = $row['partido'];
		$num_Graf = $Conteo->Votos_ind($id_part-1);
		$datos->addPoint(new Point("$politico", $num_Graf));
	}

	//Imprime Grafica
	$chart->setDataSet($datos);
	$chart->getPlot()->setGraphPadding(new Padding(5, 30, 20, 240));
	$chart->setTitle("Votos por partido");
	$chart->render("generated/Partidos.jpg");
	?>
	<img src="assets/partido1.png" width="150" height="150">
	<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos:" ,$Conteo->Votos_ind(0), " votos"; ?> ">
	
	<img src="assets/partido2.png" width="150" height="150">
	<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos:" ,$Conteo->Votos_ind(1), " votos"; ?> ">
	
	<img src="assets/partido3.png" width="150" height="150">
	<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos:" ,$Conteo->Votos_ind(2), " votos"; ?> ">
	<br>
	<img src="assets/partido4.png" width="150" height="150">
	<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos:" ,$Conteo->Votos_ind(3), " votos"; ?> ">
	
	<img src="assets/partido5.png" width="150" height="150">
	<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos:" ,$Conteo->Votos_ind(4), " votos"; ?> ">
	
	<img src="assets/partido6.png" width="150" height="150">
	<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos:" ,$Conteo->Votos_ind(5), " votos"; ?> ">
	<br>
	<img src="assets/partido7.png" width="150" height="150">
	<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos:" ,$Conteo->Votos_ind(6), " votos"; ?> ">
	
	<img src="assets/partido8.png" width="150" height="150">
	<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos:" ,$Conteo->Votos_ind(7), " votos"; ?> ">
	
	<img src="assets/nulo.jpg" width="150" height="150">
	<input type="text" read_only="read_only" name="rPri" value="<?php echo "Total de votos:" ,$Conteo->Votos_ind(8), " votos"; ?> ">
	<br>
	<A href="index.php">Regresar </A>
	<A href="pdf_try.php">Generar PDF </A>
	<h2> Resultados Graficados </h2>
	<hr>
	<img src="generated/Partidos.jpg">
	<br>
	
</body>

</html>