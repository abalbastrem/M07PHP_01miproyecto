<?php

class Conectar{

    private $host, $user, $pass, $db, $dbname, $dsn;

    public function __construct(){
        $config  = require_once '../config/config.php';
        $this->host = $config['host'];
        $this->db = $config['db'];
        $this->user = $config['user'];
        $this->pass = $config['password'];
        $this->dbname = $config['dbname'];
        $this->dsn = $this->db . ":" . "host=" . $this->host . ";" . "dbname=" . $this->dbname;
    }

    public function getConnexion(){        

        $con = new PDO($this->dsn, $this->user, $this->pass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $con;
    }

}
?>