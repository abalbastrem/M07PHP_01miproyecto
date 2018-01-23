<?php
// require 'ClaseA.php';

spl_autoload_register(function ($nombreClase ){
    require_once '../admin/' . $nombreClase . '.php';
});


class ClaseB{
    
    public $claseA;
    
    public function __construct(){
        echo "ClaseB";
        $this->claseA=new ClaseA();
    }
    
}

$b = new ClaseB();


?>