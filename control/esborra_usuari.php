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
    
$user = $_SESSION['login_user'];

delete_user($user,$con);
    
$con->close();

?>