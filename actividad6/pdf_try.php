<?php
   require('fpdf16/fpdf.php');
   require_once "conteo.php";

   $pdf=new FPDF();	
   $pdf->AddPage();	//Agregar una pagina
   $pdf->SetFont('Arial','B',14);	//Letra Arial, negrita (Bold), tam. 20
   
   //LLamado a crear clase conteo   
   $Conteo = new conteo();
  
   $servername = "localhost:3308";
   $database = "votaciones";
   $username = "root";
   $password = "";
   // Create connections
   $conn = mysqli_connect($servername, $username, $password, $database);

	$sql = "SELECT * FROM partidos";
	$result = mysqli_query($conn, $sql);

    $pdf->Cell(80,15,'        Votos totales',0,1);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,'Partido       votos',0,1);
    $pdf->Cell(0,10,'_____________________________________',0,1); 
    $pdf->SetFont('Arial','',10);

	//Impresion del pdf
	while ($row = mysqli_fetch_array($result)) {
		$id_part = $row['id_partido'];
		$politico = $row['partido'];
		$num_Graf = $Conteo->Votos_ind($id_part-1);
		$pdf->Cell(0,10,$politico.'   '.$num_Graf,0,1);
	}	
	
  $pdf->SetTextColor(0,0,255);
  $pdf->SetFont('','U'); 
  $pdf->Write(5,'Visita nuestra pagina','https://canamend.github.io/WebApplications/');
  $pdf->Output();
  mysqli_free_result($result); 
  mysqli_close($link);
