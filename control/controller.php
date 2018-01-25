<?php
require_once '../bean/Cesta.php';
require_once '../bean/Producto.php';
require_once '../model/ProductosPDO.php';
require_once '../bd/Conectar.php';

session_start();
echo $

$connectar = new Conectar();
$con = $connectar->getConnexion();

switch ($_POST['form']) {

    case add2cesta:
        echo "added to cesta";
        $cesta = new Cesta($_POST['id_producto'], $_POST['quant'], $_SESSION['login_user']->getId());
        echo $cesta->getProduct_id() . " " . $cesta->getProduct_id() . " " . $cesta->getUser_id();
        break;
        
    case othercase:
        echo "otro caso no especificado";
        break;
        
    default;
        echo "caso default";
        break;
    
};