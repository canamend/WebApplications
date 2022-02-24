<?PHP
class Conjunto
{
   private $Tam;
   private $Element;

   public function __construct($Tam)
   {
     $this->Tam=$Tam;
     $this->Element=array($Tam);
     
     $num=0;
     while($num<$Tam){
         $Numero=rand(1,20);
         $band=0;
         $i=0;
         while($band==0 && $i<$num){
             if($Numero==$this->Element[$i]){
                 $band=1;
             }
             $i++;
         }
         if($band==0){
            $this->Element[$num]=$Numero;
            $num++;
         }
     }
   }

   public function Elementos()
   {
     return $this->Element;
   }
   public function escribir($str)
   {
      echo "<br>$str<br>";
      echo "Tamaño = $this->Tam <br>";
      echo "[";
      for($i=0;$i<$this->Tam;$i++){
        echo " ",$this->Element[$i] ,",";
      }
      echo "]<br>";
      
   }
   public function Union($Conjunto1,$Conjunto2){
        //$this->Element=array_merge($Conjunto1->Element,$Conjunto2->Element);
        $Unidos=array_merge($Conjunto1->Element,$Conjunto2->Element);
        $Sinrep = array_values(array_unique($Unidos));
        //$new = array_unique($Unidos);
        $this->Element=$Sinrep;
        $this->Tam=count($Sinrep);
   }
   public function Interseccion($Conjunto1,$Conjunto2){
    $Inter = array();
    $num=0;
    for($i=0;$i<$Conjunto1->Tam;$i++){
        $band=0;
        $j=0;
        while($band==0 && $j<$Conjunto2->Tam){
            if($Conjunto1->Element[$i]==$Conjunto2->Element[$j]){
                    $Inter[$num]=$Conjunto1->Element[$i];
                    //echo $Conjunto1->Element[$i]," | ";
                    //$this->Element[$num]=$Conjunto1->Element[$i];
                    $num++;
            }
            $j++;
        }
    }
    $this->Element=$Inter;
    $this->Tam=count($Inter);
    }
    public function Diferencia($Conjunto1,$Conjunto2){
        $Dif = array();
        $num=0;
        for($i=0;$i<$Conjunto1->Tam;$i++){
            $j=0;
            $band=0;
            while($band==0 && $j<$Conjunto2->Tam){
                if($Conjunto1->Element[$i]==$Conjunto2->Element[$j]){
                        $band=1;
                        
                }
                $j++;
            }
            if($band!=1){
                $Dif[$num]=$Conjunto1->Element[$i];
                //echo $Conjunto1->Element[$i]," | ";
                //$this->Element[$num]=$Conjunto1->Element[$i];
                $num++;
            }
        }
        $this->Element=$Dif;
        $this->Tam=count($Dif);
        }

   
}
?>