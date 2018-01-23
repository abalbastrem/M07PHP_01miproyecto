<?php include("head.php")?>

<?php
if (isset($_POST['form_login'])) {
    echo "validating login...<br>";
    require_once '../control/validar_login.php';
    echo "login validated<br>";
} else {
    session_start(); // to CONTINUE the session
    echo "session in course<br>";
}

if ( isset($_SESSION['login_user']) ) {
    if ($_SESSION['login_user']->getName()=="admin") {
        echo "Hola, " . $_SESSION['login_user']->getName() . "<br>";
        require("../admin/menu.php");
    } else {
        echo "Hola, " . $_SESSION['login_user']->getName();
        require("../views/snippets/menu.php");
    }
} else {
    echo "no hi ha login_user";
}

echo "final del documento";

?>

<?php include("footer.php")?>