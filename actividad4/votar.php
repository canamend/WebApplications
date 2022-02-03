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

fwrite($fp,"$nom $voto\n");
fclose($fp);
?>

<?PHP

/*function archivo(){
    $fila = 1;
    $Deposito = array();
        if(($fp = fopen("votos.dat", "r")) !== FALSE) {
            while (($datos = fgetcsv($fp)) !== FALSE) {
                $numero = count($datos);
                //echo $fila,"<br>";
                //echo "Voto: ", $fila,"<br>";
                $Deposito[$fila-1][1]=$datos[0];
                //echo "Voto: ", $Deposito[$fila][1],"<br>";
                $fila++;
            for ($i = 0; $i < $numero; $i++){
                //echo $datos[$i] . "<br>";
            }
            //echo "\nPartido Votado: {$datos[0]} y se llama {$datos[1]} <br>";

        }
            fclose($fp);
        }else{
    echo "Aun no hay votos registrados";
    }
    $Nueva_Alianza=0;
    $Movimiento_Ciudadano=0;
    $PRI=0;
    $PRD=0;
    $PAN=0;
    $Verde=0;
    $PES=0;
    $Morena=0;
    $NULL=0;

    for($i=1;$i<$fila-1;$i++){
        echo "Votos: ",$i,":", $Deposito[$i][1],"<br>";
        if(strcasecmp($Deposito[$i][1],"Nueva_Alianza")==0){
            $Nueva_Alianza++;}
        if(strcasecmp($Deposito[$i][1],"Movimiento_Ciudadano}")==0){
            $Movimiento_Ciudadano++;}
        if(strcasecmp($Deposito[$i][1],"PRI")==0){
            $PRI++;}
        if(strcasecmp($Deposito[$i][1],"PRD")==0){
            $PRD++;}
        if(strcasecmp($Deposito[$i][1],"PAN")==0){
            $PAN++;}
        if(strcasecmp($Deposito[$i][1],"Verde")==0){
            $Verde++;}
        if(strcasecmp($Deposito[$i][1],"PES")==0){
            $PES++;}
        if(strcasecmp($Deposito[$i][1],"Morena")==0){
            $Morena++;}
        if(strcasecmp($Deposito[$i][1],"NULL")==0){
            $NULL++;
        }
    }
    $totales=$Nueva_Alianza+$Movimiento_Ciudadano+$PRI+$PRD+$PAN+$Verde+$PES+$Morena+$NULL;
    echo "--Votos totales--:",$totales,"<br>";
    echo "Nueva_Alianza:",$Nueva_Alianza,"<br>";
    echo "Movimiento_Ciudadano:",$Movimiento_Ciudadano,"<br>";
    echo "PRI:",$PRI,"<br>";
    echo "PRD:",$PRD,"<br>";
    echo "PAN:",$PAN,"<br>";
    echo "Verde:",$Verde,"<br>";
    echo "PES:",$PES,"<br>";
    echo "Morena:",$Morena,"<br>";
    echo "Votos Nulos:",$NULL,"<br>";

    return $Deposito;
}

$datos=archivo();

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
echo "Nombre: $nom <br>";*/
?>