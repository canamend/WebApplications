<?PHP
$Ren=1;
$Col=2;
$selectedOperation=$_REQUEST['Opcion'];

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

function Multi($MatrizA,$MatrizB,$ren,$col){
    for ($i = 0; $i < $ren; $i++) {
        // Dentro recorremos las filas de la primera (A)
        for ($j = 0; $j < $col; $j++) {
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
    for ($j=0; $j < $Ren; $j++) { 
        for ($i = 0; $i < $Col; $i++) { 
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
/*
echo $Ren," ",$Col," ","<br>";

function Multi_com($Ren,$Col){
    $MatrizA=array();
    $MatrizB=array();
    $MatrizA=Valores_Ini($MatrizA,$Ren,$Col);
    $MatrizB=Valores_Ini($MatrizB,$Ren,$Col);
    $MatrizC= Multi($MatrizA,$MatrizB,$Ren,$Col);
    PrintM($MatrizA,$Ren,$Col);
    PrintM($MatrizB,$Ren,$Col);
    PrintM($MatrizC,$Ren,$Col);
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
    PrintM($MatrizC,$Ren,$Col);
}

switch($Value){
    case 1:
        Suma_com($Ren,$Col);
        break;
    case 2:
        Resta_com($Ren,$Col);
        break;
    case 3:
        Multi_com($Ren,$Col);
        break;
    case 4:
        Transpuesta_com($Ren,$Col);
        break;
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