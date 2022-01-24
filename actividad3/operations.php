<html>
<head><title> Operaciones </title></head>
<body>
<h3> Funciones </h3>

<hr>
<?PHP
$Ren=$_REQUEST['Ren'];
$Col=$_REQUEST['Col'];

function Valores_Ini($MatrizA,$ren,$col){
    for ($j=0; $j < $ren; $j++) { 
        for ($i = 0; $i < $col; $i++) { 
            $MatrizA[$j][$i]=rand(-99,99);
        }
    }
    return($MatrizA);
}

function SumaM($MatrizA,$MatrizB,$Ren,$Col){
    for ($j=0; $j < $Ren; $j++) { 
        for ($i = 0; $i < $Col; $i++) { 
            $MatrizC[$j][$i]=$MatrizA[$j][$i]+$MatrizB[$j][$i];
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
    for ($j=0; $j < 3; $j++) { 
        for ($i = 0; $i < 3; $i++) { 
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

echo $Ren," ",$Col," ","<br>";

$MatrizA=array();
$MatrizB=array();
$MatrizA=Valores_Ini($MatrizA,$Ren,$Col);
$MatrizB=Valores_Ini($MatrizB,$Ren,$Col);
$MatrizC= Multi($MatrizA,$MatrizB,$Ren,$Col);
PrintM($MatrizA,$Ren,$Col);
PrintM($MatrizB,$Ren,$Col);
PrintM($MatrizC,$Ren,$Col);


?>
</body>
</html>