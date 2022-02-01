<html>
<head><title> Operaciones </title></head>
<body>
<h1> Resultados </h1>
<hr>
<?PHP
$Ren=$_REQUEST['Ren'];
$Col=$_REQUEST['Col'];
$Ren2=$_REQUEST['Ren2'];
$Col2=$_REQUEST['Col2'];
$Value =$_REQUEST['Opcion']; 

//Inicializamos matriz en 0
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        $MatrizA[$i][$j]=0;
        $MatrizB[$i][$j]=0;
    }
}

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        $MatrizA[$i][$j]=$_REQUEST['A'.$i.$j];
        $MatrizB[$i][$j]=$_REQUEST['B'.$i.$j];
        //echo ' '.$MatrizB[$i][$j] ;
    }
    //echo '<br>';
}
//echo 'Operación seleccionada'.$selectedOperation;

switch($selectedOperation){
    case 1:
        SumaM($MatrizA,$MatrizB);
        break;
    case 2:
        Resta_com($MatrizA,$MatrizB);
        break;
    case 3:
        Multi_com($MatrizA,$MatrizB);
        break;
    case 4:
        Transpuesta_com($MatrizA,$MatrizB);
        break;
    default: '<script>alert("Operacion no definida")</script>';
}


function SumaM($MatrizA,$MatrizB){
    for ($i=0; $i<3; $i++) { 
        for ($j = 0; $j<3; $j++) { 
            $MatrizC[$i][$j]=$MatrizA[$i][$j]+$MatrizB[$i][$j];
            echo $MatrizC[$i][$j];
            '<script>
                document.getElementsByName("R.$i.$j").innerHTML = "$MatrizC[$i][$j]";
            </script>';
        }
    }
    return($MatrizC);
}

function RestaM($MatrizA,$MatrizB,$Ren,$Col){
    for ($j=0; $j < $Ren; $j++) { 
        for ($i = 0; $i < $Col; $i++) { 
            $MatrizC[$j][$i]=$MatrizA[$j][$i]-$MatrizB[$j][$i];
        }
    }  
    return($MatrizC);  
}

function Multi($MatrizA,$MatrizB,$ren,$col,$col2){
    for ($i = 0; $i < $ren; $i++) {
        // Dentro recorremos las filas de la primera (A)
        for ($j = 0; $j < $col2; $j++) {
            $MatrizC[$i][$j] = 0;
            // Y cada columna de la primera (A)
            for ($k = 0; $k < $col; $k++) {
                // Multiplicamos y sumamos resultado
                $MatrizC[$i][$j] += $MatrizA[$i][$k] * $MatrizB[$k][$j];
            }
        }
    }
    return($MatrizC);
}

function TranspuestaM($MatrizA,$Ren,$Col){
    for ($i=0; $i < $Ren; $i++) { 
        for ($j = 0; $j < $Col; $j++) { 
            $MatrizC[$j][$i]=$MatrizA[$i][$j];
        }
    }  
    return($MatrizC);  
}

function PrintM($MatrizA,$ren,$col){
    echo "------Matriz-----","<br>";
    for ($i=0;$i<$ren;$i++)
    {
            for($j=0;$j<$col;$j++) 
            {
                echo $MatrizA[$i][$j],"\t";
            }
        echo "<br>";
    }
}

echo $Ren," ",$Col," ",$Ren2," ",$Col2," ",$Value, "<br>";

function Multi_com($Ren,$Col,$Ren2,$Col2){
    $MatrizA=array();
    $MatrizB=array();
    $MatrizA=Valores_Ini($MatrizA,$Ren,$Col);
    $MatrizB=Valores_Ini($MatrizB,$Ren2,$Col2);
    $MatrizC= Multi($MatrizA,$MatrizB,$Ren,$Col,$Col2);
    PrintM($MatrizA,$Ren,$Col);
    PrintM($MatrizB,$Ren2,$Col2);
    PrintM($MatrizC,$Ren,$Col2);
}

function Suma_com($Ren,$Col){
    $MatrizA=array();
    $MatrizB=array();
    $MatrizA=Valores_Ini($MatrizA,$Ren,$Col);
    $MatrizB=Valores_Ini($MatrizB,$Ren,$Col);
    $MatrizC= SumaM($MatrizA,$MatrizB,$Ren,$Col);
    PrintM($MatrizA,$Ren,$Col);
    PrintM($MatrizB,$Ren,$Col);
    PrintM($MatrizC,$Ren,$Col);
}

function Resta_com($Ren,$Col){
    $MatrizA=array();
    $MatrizB=array();
    $MatrizA=Valores_Ini($MatrizA,$Ren,$Col);
    $MatrizB=Valores_Ini($MatrizB,$Ren,$Col);
    $MatrizC= RestaM($MatrizA,$MatrizB,$Ren,$Col);
    PrintM($MatrizA,$Ren,$Col);
    PrintM($MatrizB,$Ren,$Col);
    PrintM($MatrizC,$Ren,$Col);
}

function Transpuesta_com($Ren,$Col){
    $MatrizA=array();
    $MatrizA=Valores_Ini($MatrizA,$Ren,$Col);
    $MatrizC= TranspuestaM($MatrizA,$Ren,$Col);

    PrintM($MatrizA,$Ren,$Col);
    PrintM($MatrizC,$Col,$Ren);
}

function validacion($Ren,$Col,$Ren2,$Col2,$Value){
    $band=0;
    if($Ren>0 && $Col>0 && $Ren2>0 && $Col2>0 || $Value>3){
        switch($Value){
            case 1:
                if($Ren==$Ren2 && $Col==$Col2){
                    $band=1;
                }else{
                    echo "(Suma)Los renglones y columnas deben ser iguales", "<br>";
                }
                break;
            case 2:
                if($Ren==$Ren2 && $Col==$Col2){
                    $band=1;
                }else{
                    echo "(Resta)Los renglones y columnas deben ser iguales", "<br>";
                }
                    break;
            case 3:
                if($Col==$Ren2){  
                    $band=1;
                }else{
                    echo "Las Columnas de la matriz 1 deben coincidir con los Renglones de la Matriz 2", "<br>";
                }
                break;
            case 4:
                if($Ren>0 && $Col>0){
                    $band=1;
                }else{
                    echo "Los renglones y columnas deben ser mayores a 0", "<br>";
                }
                break;
        }
        if($band>0){
            return true;
        }
    }else{
        return false;
    }
    
}

if(validacion($Ren,$Col,$Ren2,$Col2,$Value)){
    switch($Value){
        case 1:
            Suma_com($Ren,$Col);
            break;
        case 2:
            Resta_com($Ren,$Col);
            break;
        case 3:
            Multi_com($Ren,$Col,$Ren2,$Col2);
            break;
        case 4:
            Transpuesta_com($Ren,$Col);
            break;
    }
}else{
    echo "No se cumplen las condiciones";
}

/*$MatrizA=array();
$MatrizB=array();
$MatrizA=Valores_Ini($MatrizA,$Ren,$Col);
$MatrizB=Valores_Ini($MatrizB,$Ren,$Col);
$MatrizC= Multi($MatrizA,$MatrizB,$Ren,$Col);
PrintM($MatrizA,$Ren,$Col);
PrintM($MatrizB,$Ren,$Col);
PrintM($MatrizC,$Ren,$Col);*/
?>