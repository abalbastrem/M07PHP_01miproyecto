<?php

spl_autoload_register('mi_cargador');

function mi_cargador( $nombreClase ){
    require_once $nombreClase.'.php';
}

class ClaseA{
    
    private $var="hola";
    protected $var2="hola2";
    public $var3="hola3";
    
    /*public function __construct(){
        echo "hola ClaseA";
    }*/
    
    public function ClaseA(){
        echo "hola ClaseA 2";
    }
    /**
     * @return the $var
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * @return the $var2
     */
    public function getVar2()
    {
        return $this->var2;
    }

    /**
     * @return the $var3
     */
    public function getVar3()
    {
        return $this->var3;
    }

    /**
     * @param string $var
     */
    public function setVar($var)
    {
        $this->var = $var;
    }

    /**
     * @param string $var2
     */
    public function setVar2($var2)
    {
        $this->var2 = $var2;
    }

    /**
     * @param string $var3
     */
    public function setVar3($var3)
    {
        $this->var3 = $var3;
    }

}

$a = new ClaseA();

echo $a->getVar2();


?>
