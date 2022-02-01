<?PHP
$fp=fopen("votos.dat","a+");
$nom=$_REQUEST['nombre'];
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

echo "Nombre: $nom <br>";
echo "Partido: $voto <br>";

fwrite($fp,"$voto , $nom\n");
fclose($fp);
?>