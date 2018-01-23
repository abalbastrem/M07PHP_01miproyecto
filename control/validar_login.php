<?php
require_once '../bean/Usuario.php';
require_once '../bd/Conectar.php';

$connectar = new Conectar();
$con = $connectar->getConnexion();

// catch errors de connexió
if ( $con->connect_error )
    die ("Fallo en la conexión " . $con -> connect_error);

    echo "Conexión establecida<br>";

// Creem vars a partir del formulari
$username = $_POST['user'];
$password = $_POST['pass'];

// Comparamos el formulario con la TABLE 'users' de la BBDD
$sql = "SELECT * FROM users WHERE name='$username' AND password = md5('$password') LIMIT 1";
$result = $con->query($sql);

if (!$result) {
    echo 'query inválida: ' . mysql_error();
} else {
    $row = mysqli_fetch_array($result);
    $user = new Usuario($row['user_id'], $row['name'], $row['email'], $row['password']);
    session_start();
    $_SESSION['login_user'] = $user;
    echo "<br>session:<br>";
    echo $_SESSION['login_user']->getId();
    echo $_SESSION['login_user']->getName();
    echo $_SESSION['login_user']->getEmail();
    echo $_SESSION['login_user']->getPassword()."<br>";
}

$con->close();

?>