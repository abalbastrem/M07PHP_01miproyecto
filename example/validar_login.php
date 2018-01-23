<?php include("header.php")?>

<?php
if ( isset($_POST['user']) && isset($_POST['pass']) ){
    if ( $_POST["user"]=="admin" && $_POST["pass"]="123456" ){
        session_start();
        $_SESSION['login_user'] = $_POST['user'];
        echo "Sesión iniciada, " . $_SESSION['login_user'];
    } else if ( $_POST["user"]=="albert" && $_POST["pass"]="123456" ){
        session_start();
        $_SESSION['login_user'] = $_POST['user'];
        echo "Sesión iniciada, " . $_SESSION['login_user'];
    } else {
        echo "Credenciales inválidas";
    }
}
?>

<?php
if ( isset($_SESSION['login_user']) ) {
    if ($_SESSION['login_user']=="admin") {
        require("admin/menu.php");
    } else {
        require("menu.php");
    }
}

?>

<?php include("footer.php")?>