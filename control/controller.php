<?php
require_once '../bean/Cesta.php';
require_once '../model/CestaPDO.php';
require_once '../bean/Usuario.php';
require_once '../bean/Producto.php';
require_once '../model/ProductosPDO.php';
require_once '../bd/Conectar.php';

session_start();



switch ($_POST['form']) {

    case add2cesta:
        $connectar = new Conectar();
        $con = $connectar->getConnexion();
        
        $cesta = new Cesta($_POST['id_producto'], $_POST['quant'], $_SESSION['login_user']->getId());
        echo "user: " . $cesta->getUser_id() . " id producto: " . $cesta->getProduct_id() . " cantidad: " . $cesta->getCantidad() . "<br>";
        producto2cesta($cesta,$con);
        echo "producto2cesta successful.<br>";
        break;
        
    case deleteCesta:
        echo "deleting your orders...";
        $connectar = new Conectar();
        $con = $connectar->getConnexion();
        deleteCesta($_POST[user_id],$con);

    case othercase:
        echo "post no especificado correctamente";
        break;

    default;
        echo "caso default: post no especificado correctamente";
        break;

};

?>