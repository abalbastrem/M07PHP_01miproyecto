<?php
include('style/products.css');

require_once '../control/controller.php';
require_once '../bd/Conectar.php';
require_once '../model/ProductosPDO.php';

session_start();

$connectar = new Conectar();
$con = $connectar->getConnexion();
// $stmt = getProductos($con);
getProductos($con);

$con->close();