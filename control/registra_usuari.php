<?php
// CONNEXIÓ
require_once '../bd/Conectar.php';
require_once '../model/UserPDO.php';

$connectar = new Conectar();
$con = $connectar->getConnexion();

// catch errors de connexió
if ( $con->connect_error )
    die ("Fallo en la conexión " . $con -> connect_error);
    
    echo "Conexión establecida<br>";

/// Consulta INSERT ///
$username = $_POST['user'];
$password = $_POST['pass'];
$email = $_POST['email'];
new_user($username,$email,$password,$con);
            
$con->close();

?>