<?php
include('style/products.css');

require_once '../control/controller.php';

session_start();


getProductos($con);