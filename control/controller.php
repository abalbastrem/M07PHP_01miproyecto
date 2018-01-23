<?php
require_once '../bean/Cesta.php';
require_once '../bean/Producto.php';
require_once '../model/ProductosPDO.php';
require_once '../bd/Conectar.php';

$connectar = new Conectar();
$con = $connectar->getConnexion();