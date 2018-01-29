<?php
include('style/products.css');

require_once '../control/controller.php';
require_once '../bd/Conectar.php';

session_start();


$connectar = new Conectar();
$con = $connectar->getConnexion();
getProductos($con);
$con->close();