<?php
require_once '../bd/Conectar.php';
require_once '../bean/Usuario.php';
require_once '../model/UserPDO.php';
session_start();

if ( !isset($_SESSION['login_user']) ) {
    header("location: ../views/form_login.php");
};

echo "current user: " . $_SESSION['login_user']->getName() . "<br>";

$connectar = new Conectar();
$con = $connectar->getConnexion();
    
delete_user($_SESSION['login_user'],$con);

$_SESSION['login_user'] = null;

session_abort();

?>
<br>
<br>
<a href="../views/form_login.php"><< Vés al login</a>