<?PHP
$servername = "localhost";
$database = "votaciones";
$username = "root";
$password = "";

// Create connection
$nom=$_REQUEST['ciudadano'];

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM ciudadanos where INE=$nom";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
   $usuario=$row['nombre'];

if(isset($_REQUEST['Nueva_Alianza'])){
    $voto=$_REQUEST['Nueva_Alianza'];
}elseif(isset($_REQUEST['Movimiento_Ciudadano'])){
    $voto=$_REQUEST['Movimiento_Ciudadano'];
}elseif(isset($_REQUEST['PRI'])){
    $voto=$_REQUEST['PRI'];
}elseif(isset($_REQUEST['PRD'])){
    $voto=$_REQUEST['PRD'];
}elseif(isset($_REQUEST['PAN'])){
    $voto=$_REQUEST['PAN'];
}elseif(isset($_REQUEST['Verde'])){
    $voto=$_REQUEST['Verde'];
}elseif(isset($_REQUEST['PES'])){
    $voto=$_REQUEST['PES'];
}elseif(isset($_REQUEST['Morena'])){
    $voto=$_REQUEST['Morena'];
}elseif(isset($_REQUEST['NULL'])){
    $voto=$_REQUEST['NULL'];
}

echo "Nombre: $usuario <br>";
echo "Partido: $voto <br>";

$sql = "INSERT INTO votos (id_cd, id_pt) select ciudadanos.INE,partidos.id_partido from ciudadanos,partidos where ciudadanos.INE='$nom' and partidos.partido like '%$voto%'"; 
$result = mysqli_query($conn,$sql);
if($result){
       echo "Logrado";
}

$sql = "INSERT INTO votos() values()";
?>