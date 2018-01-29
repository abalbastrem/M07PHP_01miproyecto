<?php
require_once '../bean/Cesta.php';
require_once '../bean/Usuario.php';
require_once '../bean/Producto.php';
require_once '../model/ProductosPDO.php';
require_once '../bd/Conectar.php';

session_start();



switch ($_POST['form']) {

    case add2cesta:
        $connectar = new Conectar();
        $con = $connectar->getConnexion();
        echo "added to cesta<br>";
        $cesta = new Cesta($_POST['id_producto'], $_POST['quant'], $_SESSION['login_user']->getId());
        echo "user: " . $cesta->getUser_id() . " id producto: " . $cesta->getProduct_id() . " cantidad: " . $cesta->getCantidad() . "<br>";
        producto2cesta($cesta,$con);
        echo "producto2cesta successful.<br>";
        break;

    case othercase:
        echo "otro caso no especificado";
        break;

    default;
        echo "caso default";
        break;

};

?>