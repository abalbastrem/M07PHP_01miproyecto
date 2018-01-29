<?php

class Conectar_old{

    private $host, $user, $pass, $db;

    public function __construct(){
        $config  = require_once '../config/config.php';
        $this->host = $config['host'];
        $this->user = $config['user'];
        $this->pass = $config['password'];
        $this->db = $config['db'];
//         echo "<br>host ".$this->host;
//         echo "<br>user ".$this->user;
//         echo "<br>pass ".$this->pass;
//         echo "<br>db ".$this->db;
    }

    public function getConnexion(){        
        $con=new mysqli($this->host,$this->user,$this->pass,$this->db);
        
        // catch errors de connexió
        if ( $con->connect_error ) {
            die ("Fallo en la conexión " . $con -> connect_error);
        } else {
            echo "Conexión establecida<br>";
        }
        
        return $con;
    }

}
?>