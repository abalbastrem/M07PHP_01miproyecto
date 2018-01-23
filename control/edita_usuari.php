<?php
require_once '../bean/Usuario.php';
require_once '../bd/Conectar.php';
require_once '../model/UserPDO.php';

session_start();
echo "current user: " . $_SESSION['login_user']->getName() . "<br>";

if ( !isset($_SESSION['login_user']) ) {
    require 'formulario_login.php';
    die();
} else {

    $connectar = new Conectar();
    $con = $connectar->getConnexion();

    $newemail = $_POST['newemail'];
    $newpassword = $_POST['newpassword'];
    $user = $_SESSION['login_user'];

    edit_user($user, $newemail, $newpassword, $con);

    $con->close();

    // REDIRECT
    function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }

    redirect('http://localhost/miproyecto/src/views/welcome.php', false);
       
}
