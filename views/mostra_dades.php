<?php
require_once '../bean/Usuario.php';
session_start();

echo "DADES DE PERFIL:<br>";
echo "================<br><br>";
if ( isset($_SESSION['login_user']) ) {
    echo "session set";
} else {
    echo "session not set";
}

echo "&nbsp;ID: " . $_SESSION['login_user']->getId() . "<br>";
echo "&nbsp;NAME: " . $_SESSION['login_user']->getName() . "<br>";
echo "&nbsp;EMAIL: " . $_SESSION['login_user']->getEmail() . "<br>";
echo "&nbsp;PASS: " . $_SESSION['login_user']->getPassword() . "<br>";
?>
<br>
<br>
<a href="../views/welcome.php"><< Menú</a>
