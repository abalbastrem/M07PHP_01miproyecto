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

    $_SESSION['login_user'] = edit_user($user, $newemail, $newpassword, $con);
    
    echo "current profile:<br>";
    echo "name: " . $_SESSION['login_user']->getName() . "<br>";
    echo "email: " . $_SESSION['login_user']->getEmail() . "<br>";
}
?>

<br>
<br>
<a href="../views/welcome.php"><< Menú</a>
