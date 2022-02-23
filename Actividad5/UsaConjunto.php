<html>
<head><title> POO </title></head>
<body>
<h2> POO en PHP </h2>
<hr>
<?PHP
  require_once "Conjunto.php";
  $R1=new Conjunto(10);
  $R2=new Conjunto(7);
  $R3=new Conjunto(17);
  $R4=new Conjunto(17);
  $R5=new Conjunto(17);
  $R6=new Conjunto(17);

  $R1->escribir(" Conjunto 1 :");
  $R2->escribir(" Conjunto 2 :");

  echo "<br>----Operaciones---<br>";

  $R3->Union($R1,$R2);
  $R3->escribir(" Conjunto 3: Union");

  $R4->Interseccion($R1,$R2);
  $R4->escribir(" Conjunto 4: Interseccion");

  $R5->Diferencia($R1,$R2);
  $R5->escribir(" Conjunto 4: Diferencia R1-R2");

  $R6->Diferencia($R2,$R1);
  $R6->escribir(" Conjunto 5: Diferencia R2-R1");
  
?>
</body>
</html>