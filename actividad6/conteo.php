<?php
class conteo
{
    private $Votos_Resultantes;

    public function __construct()
    {
        $servername = "localhost:3308";
        $database = "votaciones";
        $username = "root";
        $password = "";
        // Create connections

        $conn = mysqli_connect($servername, $username, $password, $database);
        $sql = "SELECT * FROM votos";
        $result = mysqli_query($conn, $sql);

        $this->Votos_Resultantes=array(9);
        for($i=0;$i<9;$i++){
            $this->Votos_Resultantes[$i]=0;
        }

        while ($row = mysqli_fetch_array($result)) {
            $vot = $row['id_pt'];
            switch($vot){
                case 1:
                    $this->Votos_Resultantes[0]++;
                    break;
                case 2:
                    $this->Votos_Resultantes[1]++;
                    break;
                case 3:
                    $this->Votos_Resultantes[2]++;
                    break;
                case 4:
                    $this->Votos_Resultantes[3]++;
                    break;
                case 5:
                    $this->Votos_Resultantes[4]++;
                    break;
                case 6:
                    $this->Votos_Resultantes[5]++;
                    break;
                case 7:
                    $this->Votos_Resultantes[6]++;
                    break;
                case 8:
                    $this->Votos_Resultantes[7]++;
                    break;
                case 9:
                    $this->Votos_Resultantes[8]++;
                    break;
            }
        }
    }
    public function Votos_ind($partido)
    {
      return $this->Votos_Resultantes[$partido];
    }
}
?>