<?PHP
$servername = "localhost";
$database = "votaciones";
$username = "root";
$password = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto-Registrado</title>
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<?php
// Create connection
$nom = $_REQUEST['ciudadano'];
if ($nom != 0) {
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM ciudadanos where INE=$nom";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $usuario = $row['nombre'];

    if (isset($_REQUEST['partido'])) {
        $voto = $_REQUEST['partido'];
    }

    $sql = "INSERT INTO votos (id_cd, id_pt) select ciudadanos.INE,partidos.id_partido from ciudadanos,partidos where ciudadanos.INE='$nom' and partidos.partido like '%$voto%'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
?>

        <body class="voto">
            <br>
            <article>
                <?php
                echo "<h1>Nombre: $usuario </h1><br>";
                echo "<h3>Partido: $voto </h3><br>";
                echo "<p>Voto registrado con exito</p>";
                ?>
                <a href="index.php">Regresar</a>
            </article>
        <?php
    }
} else {
        ?>

        <body class="voto">
            <br>
            <article>
                <?php
                echo "<p>Debes seleccionar un Ciudadano</p>";
                echo "<p>Voto no registrado con exito</p>";
                ?>
                <a href="index.php">Regresar</a>
            </article>
        <?php
    }
        ?>
        <A href="resultados.php">Resultados </A>
        </body>

</html>