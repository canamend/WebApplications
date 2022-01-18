<html>
<head><title> Operaciones </title></head>
<body>
<h3> Funciones </h3>

<hr>
<?PHP

function Valores_Ini(){
    for ($j=0; $j < 3; $j++) { 
        for ($i = 0; $i < 3; $i++) { 
            $MatrizA[$j][$i]=rand(-99,99);
        }
    }
    
    for ($j=0; $j < 3; $j++) { 
        for ($i = 0; $i < 3; $i++) { 
            $MatrizB[$j][$i]=rand(-99,99);
        }
    }
    
    for ($j=0; $j < 3; $j++) { 
        for ($i = 0; $i < 3; $i++) { 
            $MatrizC[$j][$i]=0;
        }
    }
}

function SumaM($MatrizA,$MatrizB){
    for ($j=0; $j < 3; $j++) { 
        for ($i = 0; $i < 3; $i++) { 
            $MatrizC[$j][$i]=$MatrizA[$j][$i]+$MatrizB[$j][$i];
        }
    }
    return($MatrizC);
}

function RestaM($MatrizA,$MatrizB){
    for ($j=0; $j < 3; $j++) { 
        for ($i = 0; $i < 3; $i++) { 
            $MatrizC[$j][$i]=$MatrizA[$j][$i]-$MatrizB[$j][$i];
        }
    }  
    return($MatrizC);  
}

function Multi($MatrizA,$MatrizB){
    for ($a = 0; $a < 3; $a++) {
        // Dentro recorremos las filas de la primera (A)
        for ($i = 0; $i < 3; $i++) {
            $suma = 0;
            // Y cada columna de la primera (A)
            for ($j = 0; $j < 3; $j++) {
                // Multiplicamos y sumamos resultado
                $suma += $MatrizA[$i][$j] * $MatrizB[$j][$a];
            }
            // Lo acomodamos dentro del producto
            $MatrizC[$i][$a] = $suma;
        }
    }
    return($MatrizC);
}

function TranspuestaM($MatrizA){
    for ($j=0; $j < 3; $j++) { 
        for ($i = 0; $i < 3; $i++) { 
            $MatrizC[$j][$i]=$MatrizA[$i][$j];
        }
    }  
    return($MatrizC);  
}

echo "Probando funcionamiento del archivo en PHP PHP<br>";
/*$ini=$_REQUEST['inicio'];
$fin=$_REQUEST['final'];
$n=$_REQUEST['numero'];
echo "Inicio= $ini <br>";
echo "Fin= $fin <br>";
echo "Numero de datos= $n <br>";*/

?>
</body>
</html>