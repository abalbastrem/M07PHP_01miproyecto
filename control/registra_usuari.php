<?php
// CONNEXIÓ
require_once '../bd/Conectar.php';
require_once '../model/UserPDO.php';

$connectar = new Conectar();
$con = $connectar->getConnexion();

/// Consulta INSERT ///
$name = $_POST['user'];
$password = $_POST['pass'];
$email = $_POST['email'];

echo "REGISTRA<br>";
echo $name;
echo $password;
echo $email;
  

new_user($name,$email,$password,$con);
            
$con->close();

?>