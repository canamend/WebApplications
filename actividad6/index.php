<?PHP
$servername = "localhost";
$database = "votaciones";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM ciudadanos";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <main class="middle">
        <form action="votar.php">
            <section>
                <label for="">Nombre: </label>
                <select name="ciudadano" id = "ciudadano">
                    <option value= 0 >ciudadano</option>
                <?php
                    while($row = mysqli_fetch_array($result)) {
                        $usuario=$row['INE'];
                        $nom=$row['nombre'];
                        echo "<option value= $usuario > $usuario $nom </option>";
                    }
                ?>
                </select>
            </section>
            <div class="partidos">
                <button type="submit" name="Nueva_Alianza" value="Nueva_Alianza"><img src="assets/seleccion.png" class="select"><img src="assets/partido1.png" alt="partido1"></button>
                <button type="submit" name="Movimiento_Ciudadano" value="Movimiento_Ciudadano"><img src="assets/seleccion.png" class="select"><img src="assets/partido2.png" alt="partido2"></button>
                <button type="submit" name="PRI" value="PRI"><img src="assets/seleccion.png" class="select"><img src="assets/partido3.png" alt="partido3"></button>
                <button type="submit" name="PRD" value="PRD"><img src="assets/seleccion.png" class="select"><img src="assets/partido4.png" alt="partido4"></button>
                <button type="submit" name="PAN" value="PAN"><img src="assets/seleccion.png" class="select"><img src="assets/partido5.png" alt="partido5"></button>
                <button type="submit" name="Verde" value="Verde"><img src="assets/seleccion.png" class="select"><img src="assets/partido6.png" alt="partido6"></button>
                <button type="submit" name="PES" value="PES"><img src="assets/seleccion.png" class="select"><img src="assets/partido7.png" alt="partido7"></button>
                <button type="submit" name="Morena" value="Morena"><img src="assets/seleccion.png" class="select"><img src="assets/partido8.png" alt="partido8"></button>
                <button type="submit" name="NULL" value="NULL"><img src="assets/seleccion.png" class="select"><img src="assets/calcelar.png" alt="anular"></button>
            </div>
        </form>
    </main>
    <footer>
        <div>
            <ul>
                <li>BUAP</li>
                <li>F.C.C</li>
                <li>Aplicaciones WEB</li>
                <li>2022</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Canalizo Mendoza Isaac A.</li>
                <li>De La Cruz Huerta Jonathan</li>
                <li>Angel Hernandez Ramos</li>
                <li>Pérez Hernandez Jorge S.</li>
            </ul>
        </div>
    </footer>
</body>
</html>