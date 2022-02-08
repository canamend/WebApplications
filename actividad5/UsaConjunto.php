<html>
<head>
  <title> POO </title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h2 class="text-center"> POO en PHP </h2>
<hr>
<?PHP
$tam1=$_REQUEST['Conjunto1'];
$tam2=$_REQUEST['Conjunto2'];
$tam3 = $tam1 + $tam2;
  require_once "Conjunto.php";
  $R1=new Conjunto($tam1);
  $R2=new Conjunto($tam2);
  $R3=new Conjunto($tam3);
  $R4=new Conjunto($tam3);
  $R5=new Conjunto($tam3);
  $R6=new Conjunto($tam3);

  echo "<div class=row>";
  echo "<div class=\"col bg-danger rounded m-5 text-center text-white\">";
  $R1->escribir(" Conjunto 1 :");
  echo "</div>";
  echo "<div class=\"col bg-danger rounded m-5 text-center text-white\">";
  $R2->escribir(" Conjunto 2 :");
  echo "</div>";
  echo "</div>";

  echo "<div class=text-center> <br><h1>Operaciones</h1><br></div>";

  echo "<div class=row>";
  echo "<div class=\"col bg-warning rounded m-5 text-center text-white\">";
  $R3->Union($R1,$R2);
  $R3->escribir(" Conjunto 3: Union");
  echo "</div>";
  echo "<div class=\"col bg-success rounded m-5 text-center text-white\">";
  $R4->Interseccion($R1,$R2);
  $R4->escribir(" Conjunto 4: Interseccion");
  echo "</div>";
  echo "</div>";
  echo "<hr>";
  echo "<div class=row>";
  echo "<div class=\"col bg-info rounded m-5 text-center text-white\">";
  $R5->Diferencia($R1,$R2);
  $R5->escribir(" Conjunto 4: Diferencia R1-R2");
  echo "</div>";
  echo "<div class=\"col bg-primary rounded m-5 text-center text-white\">";
  $R6->Diferencia($R2,$R1);
  $R6->escribir(" Conjunto 5: Diferencia R2-R1");
  echo "</div>";
  echo "</div>";
  
?>
</body>
</html>