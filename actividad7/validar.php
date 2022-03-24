<?php
$link = mysqli_connect("localhost:3308", "root", "");
mysqli_select_db($link, "videoteca");
$user = $_REQUEST['usuario'];
$pass = $_REQUEST['passwd'];
echo "$user <br>";
echo "$pass <br>";


$result = mysqli_query($link, "select * from clientes where password = $pass and usuario like '$user'");
if ($result) {
    $row = mysqli_fetch_array($result);
    $ti = $row['tipo'];
    if ($ti == 1) {
        header("location: indexCliente.php");
    } else {
            header("location: indexAdmin.php");
    }
} else {
    $_POST['usuario'];
    $_POST['passwd'];
    header("location: accesso.php");
}