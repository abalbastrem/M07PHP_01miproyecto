<?php
require_once '../model/UserPDO.php';
require_once '../bean/Usuario.php';
require_once '../bd/Conectar.php';

$conectar = new Conectar();
$con = $conectar->getConnexion();

$user = get_user($_POST['user'], $_POST['pass'], $con);

session_start();
$_SESSION['login_user'] = $user;

?>